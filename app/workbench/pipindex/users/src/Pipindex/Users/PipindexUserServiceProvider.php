<?php

namespace Pipindex\Users;

use Illuminate\Support\ServiceProvider;

class PipindexUserServiceProvider extends \Zizaco\Confide\ServiceProvider {

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
        parent::boot();

        $this->package('pipindex/users');

        include __DIR__.'/../../routes.php';
        include __DIR__.'/../../filters.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        $providers = array(
            'Zizaco\Entrust\EntrustServiceProvider'
        );

        foreach ($providers as $provider) {
            $this->instances[] = $this->app->register($provider);
        }

        $this->app['config']['auth.model'] = 'Pipindex\Users\PipindexUser';
        $this->app['config']['auth.driver'] = 'eloquent';
        $this->app['config']['auth.table'] = 'pipindex_users';

        $this->app->bind('pipindexuser', function()
        {
            return new PipindexUser;
        });

        $this->app->bind('pipindexrole', function()
        {
            return new PipindexRole;
        });

        $this->app->bind('pipindexuserrepository', function()
        {
            return new PipindexUserRepository;
        });

        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Confide', 'Zizaco\Confide\Facade');
            $loader->alias('Entrust', 'Zizaco\Entrust\EntrustFacade');
            $loader->alias('PipindexUser', 'Pipindex\Facades\PipindexUser');
            $loader->alias('PipindexRole', 'Pipindex\Facades\PipindexRole');
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