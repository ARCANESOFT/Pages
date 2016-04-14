<?php namespace Arcanesoft\Pages\Seeds;

use Arcanesoft\Auth\Seeds\PermissionsSeeder;

/**
 * Class     PermissionsTableSeeder
 *
 * @package  Arcanesoft\Pages\Seeds
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class PermissionsTableSeeder extends PermissionsSeeder
{
    /* ------------------------------------------------------------------------------------------------
     |  Main Functions
     | ------------------------------------------------------------------------------------------------
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

    /* ------------------------------------------------------------------------------------------------
     |  Other Functions
     | ------------------------------------------------------------------------------------------------
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
                'slug'        => 'pages.pages.list',
            ],[
                'name'        => 'Pages - View a page',
                'description' => 'Allow to display a page.',
                'slug'        => 'pages.pages.show',
            ],[
                'name'        => 'Pages - Create a page',
                'description' => 'Allow to create a page.',
                'slug'        => 'pages.pages.create',
            ],[
                'name'        => 'Pages - Update a page',
                'description' => 'Allow to update a page.',
                'slug'        => 'pages.pages.update',
            ],[
                'name'        => 'Pages - Delete a page',
                'description' => 'Allow to delete a page.',
                'slug'        => 'pages.pages.delete',
            ]
        ];
    }
}
