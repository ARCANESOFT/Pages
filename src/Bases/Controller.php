<?php namespace Arcanesoft\Pages\Bases;

use Arcanedev\Support\Bases\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

/**
 * Class     Controller
 *
 * @package  Arcanesoft\Pages\Bases
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class Controller extends BaseController
{
    /* ------------------------------------------------------------------------------------------------
     |  Traits
     | ------------------------------------------------------------------------------------------------
     */
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
