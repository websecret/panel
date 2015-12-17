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
        $this->handleMigrations();
        $this->handleViews();
        $this->handleAssets();

        $this->registerRoutes($router);
    }

    public function register()
    {
        $this->registerFormHelperBuilder();
    }


    protected function registerFormHelperBuilder()
    {
        $this->app->bindShared('form-helper', function () {
            return new FormHelperBuilder();
        });
    }

    private function handleModels()
    {
        $config = $this->getPanelConfig();
        $this->publishes([
            __DIR__ . '/Models' => $config['models_path'],
        ], 'models');
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
    }

    private function handleAssets()
    {
        $this->publishes([
            __DIR__ . '/../public' => public_path('assets/panel'),
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
