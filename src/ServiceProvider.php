<?php namespace Lindelea\Support\Aws\Elb;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider {

    /**
     * Register.
     *
     * @return
     */
    public function register()
    {
        //
    }

    /**
     * Boot.
     *
     * @return void
     */
    public function boot()
    {
        $kernel = $this->app->make('Illuminate\Contracts\Http\Kernel');
        $kernel->pushMiddleware('Lindelea\Support\Aws\Elb\MainMiddleware');
    }

}
