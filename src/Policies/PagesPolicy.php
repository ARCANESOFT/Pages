<?php namespace Arcanesoft\Pages\Policies;

use Arcanesoft\Contracts\Auth\Models\User;

/**
 * Class     PagesPolicy
 *
 * @package  Arcanesoft\Pages\Policies
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class PagesPolicy extends AbstractPolicy
{
    /* -----------------------------------------------------------------
     |  Constants
     | -----------------------------------------------------------------
     */

    const PERMISSION_LIST   = 'pages.pages.list';
    const PERMISSION_SHOW   = 'pages.pages.show';
    const PERMISSION_CREATE = 'pages.pages.create';
    const PERMISSION_UPDATE = 'pages.pages.update';
    const PERMISSION_DELETE = 'pages.pages.delete';

    /* -----------------------------------------------------------------
     |  Abilities
     | -----------------------------------------------------------------
     */

    /**
     * Allow to list all the footers.
     *
     * @param  \Arcanesoft\Contracts\Auth\Models\User  $user
     *
     * @return bool
     */
    public function listPolicy(User $user)
    {
        return $user->may(static::PERMISSION_LIST);
    }

    /**
     * Allow to show a footer details.
     *
     * @param  \Arcanesoft\Contracts\Auth\Models\User  $user
     *
     * @return bool
     */
    public function showPolicy(User $user)
    {
        return $user->may(static::PERMISSION_SHOW);
    }

    /**
     * Allow to create a footer.
     *
     * @param  \Arcanesoft\Contracts\Auth\Models\User  $user
     *
     * @return bool
     */
    public function createPolicy(User $user)
    {
        return $user->may(static::PERMISSION_CREATE);
    }

    /**
     * Allow to update a footer.
     *
     * @param  \Arcanesoft\Contracts\Auth\Models\User  $user
     *
     * @return bool
     */
    public function updatePolicy(User $user)
    {
        return $user->may(static::PERMISSION_UPDATE);
    }

    /**
     * Allow to delete a footer.
     *
     * @param  \Arcanesoft\Contracts\Auth\Models\User  $user
     *
     * @return bool
     */
    public function deletePolicy(User $user)
    {
        return $user->may(static::PERMISSION_DELETE);
    }
}
