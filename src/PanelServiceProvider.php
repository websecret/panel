<?php

namespace Websecret\Panel;


use Illuminate\Support\ServiceProvider;

class PanelServiceProvider extends ServiceProvider
{
    protected $defer = false;

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'panel');

        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/panel'),
        ]);

        $this->publishes([
            __DIR__.'/../public' => public_path('assets/panel'),
        ], 'public');
    }

    public function register()
    {
        
    }
}
