<?php

namespace Crabbly\Fpdf;

use Illuminate\Support\ServiceProvider;

class FpdfServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Fpdf', function () {
            return new Fpdf;
        });
    }
}
