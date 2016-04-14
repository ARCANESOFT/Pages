<?php namespace Arcanesoft\Pages\Bases;

use Arcanedev\Support\Bases\Model as BaseModel;

/**
 * Class     Model
 *
 * @package  Arcanesoft\Pages\Bases
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
abstract class Model extends BaseModel
{
    /* ------------------------------------------------------------------------------------------------
     |  Constructor
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Create a new Eloquent model instance.
     *
     * @param  array  $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->prefix = config('arcanesoft.pages.database.prefix', null);

        parent::__construct($attributes);
    }
}
