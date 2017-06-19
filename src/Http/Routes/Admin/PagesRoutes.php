<?php namespace Arcanesoft\Pages\Http\Routes\Admin;

use Arcanedev\Support\Routing\RouteRegistrar;

/**
 * Class     PagesRoutes
 *
 * @package  Arcanesoft\Pages\Http\Routes\Admin
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class PagesRoutes extends RouteRegistrar
{
    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    /**
     * Map routes.
     */
    public function map()
    {
        $this->name('pages.')->prefix('pages')->group(function () {
            $this->get('/', 'PagesController@index')
                 ->name('index'); // admin::pages.pages.index
        });
    }
}
