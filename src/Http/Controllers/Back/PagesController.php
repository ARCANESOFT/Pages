<?php namespace Arcanesoft\Pages\Http\Controllers\Back;

use Arcanesoft\Pages\Bases\FoundationController as Controller;
use Arcanesoft\Pages\Models\Page;

/**
 * Class     PagesController
 *
 * @package  Arcanesoft\Pages\Http\Controllers\Back
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class PagesController extends Controller
{
    /* ------------------------------------------------------------------------------------------------
     |  Properties
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * The post model.
     *
     * @var \Arcanesoft\Pages\Models\Page
     */
    private $page;

    /* ------------------------------------------------------------------------------------------------
     |  Constructor
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Instantiate the controller.
     *
     * @param  \Arcanesoft\Pages\Models\Page  $page
     */
    public function __construct(Page $page)
    {
        parent::__construct();

        $this->page = $page;

        $this->setCurrentPage('cms-pages');
        $this->addBreadcrumbRoute('Pages', 'pages::foundation.pages.index');
    }

    /* ------------------------------------------------------------------------------------------------
     |  Main Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * List all pages.
     *
     * @param bool $trashed
     *
     * @return \Illuminate\View\View
     */
    public function index($trashed = false)
    {
        $this->authorize('pages.pages.list');

        $pages = [];
        $title = 'List of pages' . ($trashed ? ' - Trashed' : '');
        $this->setTitle($title);
        $this->addBreadcrumb($title);

        return $this->view('backend.pages.index', compact('trashed', 'pages'));
    }

    public function add()
    {
        //
    }

    public function create()
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update($id)
    {
        //
    }

    public function delete($id)
    {
        //
    }
}
