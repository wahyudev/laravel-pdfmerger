<?php
/*
* File:     PDFMergerServiceProvider.php
* Category: Provider
* Updated:  -
*
* Description:
*  -
*/

namespace Wahyudev\PDFMerger\Providers;

use Illuminate\Support\ServiceProvider;
use Wahyudev\PDFMerger\PDFMerger;

class PDFMergerServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('PDFMerger', function ($app) {
            $oPDFMerger = new PDFMerger($app['files']);
            return $oPDFMerger;
        });
    }
}