<?php

    namespace SamBenne\LaravelStringDiff\Facade;

    use Illuminate\Support\Facades\Facade;

    class StringDiff extends Facade
    {
        /**
         * Get the binding in the IoC container
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
            return 'StringDiff'; // the IoC binding.
        }
    }