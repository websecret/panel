<?php

namespace Websecret\Panel;


use Illuminate\Support\ServiceProvider;

class PanelServiceProvider extends ServiceProvider
{
    protected $defer = false;

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'panel');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/websecret/panel'),
        ]);

        $this->publishes([
            __DIR__.'/public' => public_path('websecret/panel'),
        ], 'public');
    }

    public function register()
    {
        
    }
}