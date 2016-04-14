<?php namespace Arcanesoft\Pages\Providers;

use Arcanesoft\Pages\Http\Routes;
use Arcanesoft\Core\Bases\RouteServiceProvider as ServiceProvider;
use Illuminate\Contracts\Routing\Registrar as Router;

/**
 * Class     RouteServiceProvider
 *
 * @package  Arcanesoft\Pages\Providers
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class RouteServiceProvider extends ServiceProvider
{
    /* ------------------------------------------------------------------------------------------------
     |  Getters & Setters
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Get the routes namespace
     *
     * @return string
     */
    protected function getRouteNamespace()
    {
        return 'Arcanesoft\\Pages\\Http\\Routes';
    }

    /**
     * Get the auth foundation route prefix.
     *
     * @return string
     */
    public function getFoundationPagesPrefix()
    {
        $prefix = array_get($this->getFoundationRouteGroup(), 'prefix', 'dashboard');

        return "$prefix/" . config('arcanesoft.pages.route.prefix', 'pages');
    }

    /* ------------------------------------------------------------------------------------------------
     |  Main Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Contracts\Routing\Registrar  $router
     */
    public function map(Router $router)
    {
        $this->mapPublicRoutes($router);
        $this->mapFoundationRoutes($router);
    }

    /**
     * Define the public routes for the application.
     *
     * @param  \Illuminate\Contracts\Routing\Registrar  $router
     */
    private function mapPublicRoutes(Router $router)
    {
        $attributes = [
            'prefix'    => 'pages',
            'as'        => 'pages::',
            'namespace' => 'Arcanesoft\\Pages\\Http\\Controllers\\Front',
        ];
    }
    /**
     * Define the foundation routes for the application.
     *
     * @param  \Illuminate\Contracts\Routing\Registrar  $router
     */
    private function mapFoundationRoutes(Router $router)
    {
        $attributes = array_merge($this->getFoundationRouteGroup(), [
            'as'        => 'pages::foundation.',
            'namespace' => 'Arcanesoft\\Auth\\Http\\Controllers\\Back',
        ]);

        $router->group(array_merge(
            $attributes,
            ['prefix' => $this->getFoundationPagesPrefix()]
        ), function (Router $router) {
            Routes\Back\StatsRoutes::register($router);
        });
    }
}
