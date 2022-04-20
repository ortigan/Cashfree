<?php 

namespace Ortigan\Cashfree;

use Illuminate\Support\ServiceProvider;

class CashfreeServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->app->bind(Cashfree::class);
        $this->publishes([
            __DIR__.'/../config/cashfree.php' => config_path('cashfree.php'),
        ], 'ortigan-cashfree-config');
    }
    public function register(){

    }
} 