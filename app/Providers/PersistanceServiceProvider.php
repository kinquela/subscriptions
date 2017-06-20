<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Adapters\ApiAdapter;
use App\Services\Adapters\MockAdapter;


class PersistanceServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton('PersistanceAdapter', function ($app) {
            switch(env('APP_PERSISTANCE')){
                case 'api':
                    return new ApiAdapter();
                    break;
                case 'mock';
                    return new MockAdapter();
                    break;
            }
            
        });
    }

}
