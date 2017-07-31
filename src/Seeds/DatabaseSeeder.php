<?php namespace Arcanesoft\Pages\Seeds;

use Arcanedev\Support\Bases\Seeder;

/**
 * Class     DatabaseSeeder
 *
 * @package  Arcanesoft\Pages\Seeds
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class DatabaseSeeder extends Seeder
{
    /* ------------------------------------------------------------------------------------------------
     |  Properties
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Seeder collection.
     *
     * @var array
     */
    protected $seeds = [
        PermissionsTableSeeder::class,
        RolesTableSeeder::class,
    ];
}
