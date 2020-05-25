<?php

namespace StrongVerify\SDK;

use Illuminate\Support\ServiceProvider;
//use StrongVerify\SDK;

class StrongVerifyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('StrongVerify', function(){
            $config = array();
            return new StrongVerify($config);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/strongverify.php' => config_path('strongverify.php'),
        ]);
    }
}
