<?php

    namespace SamBenne\LaravelStringDiff\Providers;

    use Illuminate\Support\ServiceProvider;
    use SamBenne\LaravelStringDiff\Diff;

    class StringDiffServiceProvider extends ServiceProvider
    {
        public function boot()
        {

        }

        public function register()
        {
            $this->app->singleton('StringDiff', function ($app) {
                return new Diff();
            });
        }
    }