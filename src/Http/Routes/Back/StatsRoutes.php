<?php namespace Arcanesoft\Pages\Http\Routes\Back;

use Arcanedev\Support\Bases\RouteRegister;
use Illuminate\Contracts\Routing\Registrar;

/**
 * Class     StatsRoutes
 *
 * @package  Arcanesoft\Pages\Http\Routes\Back
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class StatsRoutes extends RouteRegister
{
    /* ------------------------------------------------------------------------------------------------
     |  Main Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Map routes.
     *
     * @param  \Illuminate\Contracts\Routing\Registrar  $router
     */
    public function map(Registrar $router)
    {
        $this->group([
            'prefix'    => 'stats',
        ], function () {
            $this->get('/', [
                'as'   => 'dashboard', // pages::foundation.dashboard
                'uses' => 'DashboardController@index',
            ]);
        });
    }
}
