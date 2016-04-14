<?php namespace Arcanesoft\Pages\Bases;

use Arcanedev\Support\Bases\Migration as BaseMigration;

/**
 * Class     Migration
 *
 * @package  Arcanesoft\Pages\Bases
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
abstract class Migration extends BaseMigration
{
    /* ------------------------------------------------------------------------------------------------
     |  Constructor
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Make a migration instance.
     */
    public function __construct()
    {
        $this->setConnection(config('arcanesoft.pages.database.connection', null));
        $this->setPrefix(config('arcanesoft.pages.database.prefix', ''));
    }
}
