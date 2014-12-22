<?php

namespace Pipindex\Users;

use Illuminate\Support\ServiceProvider;

class PipindexUserServiceProvider extends ServiceProvider {

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
        $this->package('pipindex/users');

        include __DIR__.'/../../routes.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $providers = array(
            'Zizaco\Confide\ServiceProvider'
        );

        foreach ($providers as $provider)
        {
            $this->instances[] = $this->app->register($provider);
        }

        $this->app['config']['auth.model'] = 'Pipindex\Users\PipindexUser';
        $this->app['config']['auth.driver'] = 'eloquent';
        $this->app['config']['auth.table'] = 'pipindex_users';

        $this->app->bind('pipindexuser', function()
        {
            return new PipindexUser;
        });

        $this->app->bind('pipindexuserrepository', function()
        {
            return new PipindexUserRepository;
        });

        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Confide', 'Zizaco\Confide\Facade');
            $loader->alias('PipindexUser', 'Pipindex\Facades\PipindexUser');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('pipindexuser');
    }
}