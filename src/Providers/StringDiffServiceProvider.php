<?php

    namespace SamBenne\LaravelStringDiff\Providers;

    use Illuminate\Support\ServiceProvider;
    use SamBenne\LaravelStringDiff\Diff;

    class StringDiffServiceProvider extends ServiceProvider
    {
        public function boot()
        {
            $this->publishes([
                __DIR__ . '/../../assets' => public_path('vendor/string-diff'),
            ], 'public');
        }

        public function register()
        {
            $this->app->singleton('StringDiff', function ($app) {
                return new Diff();
            });
        }
    }