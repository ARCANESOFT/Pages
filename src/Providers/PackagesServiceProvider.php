<?php namespace Arcanesoft\Pages\Providers;

use Arcanedev\LaravelMarkdown\LaravelMarkdownServiceProvider;
use Arcanedev\Support\ServiceProvider;

/**
 * Class     PackagesServiceProvider
 *
 * @package  Arcanesoft\Pages\Providers
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class PackagesServiceProvider extends ServiceProvider
{
    /* ------------------------------------------------------------------------------------------------
     |  Main Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->register(LaravelMarkdownServiceProvider::class);
    }
}
