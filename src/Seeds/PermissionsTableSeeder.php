<?php namespace Arcanesoft\Pages\Seeds;

use Arcanesoft\Auth\Seeds\PermissionsSeeder;
use Arcanesoft\Pages\Policies\PagesPolicy;

/**
 * Class     PermissionsTableSeeder
 *
 * @package  Arcanesoft\Pages\Seeds
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class PermissionsTableSeeder extends PermissionsSeeder
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
                'group'       => [
                    'name'        => 'Pages',
                    'slug'        => 'page',
                    'description' => 'Pages permissions group',
                ],
                'permissions' => array_merge(
                    $this->getPagesSeeds()
                ),
            ],
        ]);
    }

    /* -----------------------------------------------------------------
     |  Permissions
     | -----------------------------------------------------------------
     */

    /**
     * Get the Pages permissions.
     *
     * @return array
     */
    private function getPagesSeeds()
    {
        return [
            [
                'name'        => 'Pages - List all pages',
                'description' => 'Allow to list all pages.',
                'slug'        => PagesPolicy::PERMISSION_LIST,
            ],[
                'name'        => 'Pages - View a page',
                'description' => 'Allow to display a page.',
                'slug'        => PagesPolicy::PERMISSION_SHOW,
            ],[
                'name'        => 'Pages - Create a page',
                'description' => 'Allow to create a page.',
                'slug'        => PagesPolicy::PERMISSION_CREATE,
            ],[
                'name'        => 'Pages - Update a page',
                'description' => 'Allow to update a page.',
                'slug'        => PagesPolicy::PERMISSION_UPDATE,
            ],[
                'name'        => 'Pages - Delete a page',
                'description' => 'Allow to delete a page.',
                'slug'        => PagesPolicy::PERMISSION_DELETE,
            ],
        ];
    }
}
