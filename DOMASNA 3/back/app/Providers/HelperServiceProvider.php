<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $helpers = glob(app_path('Helpers') . "/*.php");
        foreach($helpers as $helper) {
            require_once $helper;
        }
    }
}
