<?php

namespace Websecret\Panel;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;

class PanelServiceProvider extends ServiceProvider
{

    public function boot(Router $router)
    {

        $this->handleConfigs();
        $this->handleModels();
        $this->handleCommands();
        $this->handleMigrations();
        $this->handleViews();
        $this->handleAssets();

        $this->registerRoutes($router);
    }

    public function register()
    {
    }

    private function handleModels()
    {
        $config = $this->getPanelConfig();
        $this->publishes([
            __DIR__ . '/Models' => $config['models_path'],
        ], 'models');
    }

    private function handleCommands()
    {
        $this->publishes([
            __DIR__ . '/Console/Commands' => app_path('Console/Commands'),
        ], 'commands');
    }

    private function registerRoutes($router)
    {
        $config = $this->getPanelConfig();

        $autocompleteUrl = $config['autocomplete_url'];
        $router->get($autocompleteUrl, function (Request $request) {
            $model = $request->input('model');
            $field = $request->input('field');
            $query = trim($request->input('query', ''));
            return $model::autocomplete($field, $query);
        })->name('panel::autocomplete');

        $uploadUrl = $config['upload_url'];
        $router->post($uploadUrl, 'Websecret\Panel\Http\Controllers\UploadController@images')->name('panel::upload');

        $uploadUrlRedactor = $config['upload_redactor_url'];
        $router->post($uploadUrlRedactor, 'Websecret\Panel\Http\Controllers\UploadController@redactorImages')->name('panel::upload-redactor');

        $uploadUrlFroala = $config['upload_froala_url'];
        $router->post($uploadUrlFroala, 'Websecret\Panel\Http\Controllers\UploadController@froalaImages')->name('panel::upload-froala');
    }

    private function handleMigrations()
    {
        $this->publishes([
            __DIR__ . '/../migrations' => base_path('database/migrations'),
        ], 'migrations');
    }

    private function handleViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'panel');
        $this->publishes([
            __DIR__ . '/../resources/views' => base_path('resources/views/vendor/panel'),
        ], 'views');

        view()->composer('panel::partials.client-news', function ($view) {
            $domain = explode('/', url('/'))[2];
            try {
                $json = file_get_contents('http://websecret.by/api/client-news?domain=' . $domain);
                $data = json_decode($json);
            } catch (\Exception $e) {
                $data = [];
            }

            return $view->with(['articles' => $data]);
        });
    }

    private function handleAssets()
    {
        $this->publishes([
            __DIR__ . '/../public/assets' => public_path('assets/panel'),
        ], 'assets');
    }

    private function handleConfigs()
    {
        $configPath = __DIR__ . '/../config/panel.php';
        $this->publishes([$configPath => config_path('panel.php')], 'config');
        $this->mergeConfigFrom($configPath, 'panel');
    }


    protected function getPanelConfig()
    {
        $defaults = app('config')->get('panel');
        if (property_exists($this, 'panel')) {
            return array_merge($defaults, $this->panel);
        }
        return $defaults;
    }
}
