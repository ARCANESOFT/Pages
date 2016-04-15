<?php namespace Arcanesoft\Pages\Models;

use Arcanesoft\Pages\Bases\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class     Page
 *
 * @package  Arcanesoft\Pages\Models
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 *
 * @property  int             id
 * @property  int             author_id
 * @property  string          title
 * @property  string          slug
 * @property  string          content
 * @property  string          template
 * @property  \Carbon\Carbon  created_at
 * @property  \Carbon\Carbon  updated_at
 * @property  \Carbon\Carbon  deleted_at
 */
class Page extends Model
{
    /* ------------------------------------------------------------------------------------------------
     |  Trait
     | ------------------------------------------------------------------------------------------------
     */
    use SoftDeletes;

    /* ------------------------------------------------------------------------------------------------
     |  Properties
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'slug', 'body', 'active', 'parent_id'];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['excerpt'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /* ------------------------------------------------------------------------------------------------
     |  Getters & Setters
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * The pages short content.
     *
     * @return null|string
     */
    public function getExcerptAttribute()
    {
        return array_key_exists('body', $this->attributes)
            ? str_limit(strip_tags($this->attributes['body']), 200)
            : null;
    }
}
