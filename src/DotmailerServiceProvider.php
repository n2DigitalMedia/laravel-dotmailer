<?php

namespace N2DigitalMedia\LaravelDotmailer;

use DotMailer\Api\Container;
use Illuminate\Support\ServiceProvider;

class DotmailerServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/dotmailer.php', 'dotmailer'
        );

        $credentials = $this->credentials();

        $this->app->singleton('dotmailer', function() use($credentials)
        {
            return Container::newResources($credentials);
        });
    }

    /**
     * Return a credentials array
     *
     * @return array
     */
    private function credentials()
    {
        return  [
            Container::USERNAME	=> config('dotmailer.username'),
            Container::PASSWORD	=> config('dotmailer.password')
        ];
    }

}