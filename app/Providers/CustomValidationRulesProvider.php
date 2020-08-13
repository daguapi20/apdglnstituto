<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
class CustomValidationRulesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //validar texto y espacio
            // Validator::extend('alpha_spaces', function($attribute, $value)
            // {
            // return preg_match('/^[\pL\s]+$/u', $value);
            //});
    }
}
