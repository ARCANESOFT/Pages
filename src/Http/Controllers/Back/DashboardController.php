<?php namespace Arcanesoft\Pages\Http\Controllers\Back;

use Arcanesoft\Pages\Bases\FoundationController as Controller;

/**
 * Class     DashboardController
 *
 * @package  Arcanesoft\Pages\Http\Controllers\Back
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class DashboardController extends Controller
{
    /* ------------------------------------------------------------------------------------------------
     |  Constructor
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Instantiate the controller.
     */
    public function __construct()
    {
        parent::__construct();

        $this->setCurrentPage('cms-dashboard');
    }

    /* ------------------------------------------------------------------------------------------------
     |  Main Functions
     | ------------------------------------------------------------------------------------------------
     */
    public function index()
    {
        $this->authorize('cms.dashboard.stats');

        $title = 'CMS - Dashboard';
        $this->setTitle($title);
        $this->addBreadcrumb('Statistics');

        return $this->view('backend.dashboard');
    }
}
