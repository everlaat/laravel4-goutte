<?php namespace Elvedia\Goutte\Providers;

use Illuminate\Support\ServiceProvider;
use Elvedia\Goutte\Goutte;

class GoutteServiceProvider extends ServiceProvider {

  /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;

  /**
   * Bootstrap the application events.
   *
   * @return void
   */
  public function boot()
  {
    $this->package('elvedia/goutte');
  }

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    $this->app['goutte'] = $this->app->share( function( $app ) {
      return new Goutte( );
    });   
  }

  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides()
  {
    return array( 'goutte' );
  }

}
