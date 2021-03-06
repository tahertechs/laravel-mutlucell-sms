<?php
namespace Ardakilic\Mutlucell;

/**
 * Laravel 4 Mutlucell SMS
 * @license MIT License
 * @author Arda Kılıçdağı <ardakilicdagi@gmail.com>
 * @link http://arda.pw
 *
 */

use Illuminate\Support\ServiceProvider;

class MutlucellServiceProvider extends ServiceProvider
{
    
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
        $this->package('ardakilic/mutlucell');
    }
    
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //register edelim
        $this->app['mutlucell'] = $this->app->share(function($app)
        {
            return new Mutlucell($app);
        });
        
    }

}
