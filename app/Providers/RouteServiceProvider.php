<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    protected $driverauthnamespace = 'App\Http\Controllers\Driver\Auth';
    protected $drivernamespace = 'App\Http\Controllers\Driver';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapPublicDriverAuthRoutes();
        $this->mapProtectedDriverAuthRoutes();
        $this->mapProtectedDriverApiRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    /**
     * All OAuth public routes under the Driver Domain
     */
    protected function mapPublicDriverAuthRoutes()
    {
        Route::prefix('api/v1/driver/auth')
             ->middleware('api')
             ->namespace($this->driverauthnamespace)
             ->group(base_path('routes/Driver/Auth/public_routes.php'));
    }

    /**
     * All OAuth protected routes under the Driver Domain
     */
    protected function mapProtectedDriverAuthRoutes()
    {
        Route::prefix('api/v1/driver/auth')
             ->middleware('api')
             ->namespace($this->driverauthnamespace)
             ->group(base_path('routes/Driver/Auth/protected_routes.php'));
    }

    protected function mapProtectedDriverApiRoutes(){
        Route::prefix('api/v1/driver/')
             ->middleware(['auth:api','user.verify'])
             ->namespace($this->drivernamespace)
             ->group(base_path('routes/Driver/protected_routes.php'));
    }
}
