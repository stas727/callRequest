<?php
namespace stas727\callRequest;

use Illuminate\Support\ServiceProvider;

/**
 * Created by PhpStorm.
 * User: stasm
 * Date: 26.05.2017
 * Time: 12:40
 */
class callRequestServiceProvider extends ServiceProvider
{
   public function boot()
   {
      include __DIR__ . '/routes.php';
      $this->loadViewsFrom(__DIR__ . '/Views', 'callRequest');

   }

   public function register()
   {
      $this->app->make('stas727\callRequest\Controllers\CallRequestController');
   }
}