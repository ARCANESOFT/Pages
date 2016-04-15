<?php namespace Arcanesoft\Pages\Http\Routes\Back;

use Arcanedev\Support\Bases\RouteRegister;
use Illuminate\Contracts\Routing\Registrar;

/**
 * Class     PagesRoutes
 *
 * @package  Arcanesoft\Pages\Http\Routes\Back
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class PagesRoutes extends RouteRegister
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
            'as'     => 'pages.',
            'prefix' => 'pages',
        ], function () {
            $this->get('/', [
                'as'   => 'index', // pages::foundation.pages.index
                'uses' => 'PagesController@index',
            ]);
        });
    }
}
