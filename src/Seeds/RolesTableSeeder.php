<?php namespace Arcanesoft\Pages\Seeds;

use Arcanesoft\Auth\Seeds\RolesSeeder;

/**
 * Class     RolesTableSeeder
 *
 * @package  Arcanesoft\Pages\Seeds
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class RolesTableSeeder extends RolesSeeder
{
    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    /**
     * Run the database seeds.
     */
    public function run()
    {
        $this->seed([
            [
                'name'        => 'Pages Moderators',
                'description' => 'The Pages moderators role.',
                'is_locked'   => true,
            ],[
                'name'        => 'Pages Authors',
                'description' => 'The Pages authors role.',
                'is_locked'   => true,
            ]
        ]);

        $this->syncAdminRole();
        $this->syncRoles([
            'pages-moderators' => 'pages.',
            'pages-authors'    => 'pages.pages.',
        ]);
    }
}
