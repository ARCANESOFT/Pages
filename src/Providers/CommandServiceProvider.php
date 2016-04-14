<?php namespace Arcanesoft\Pages\Providers;

use Arcanedev\Support\Providers\CommandServiceProvider as ServiceProvider;

/**
 * Class     CommandServiceProvider
 *
 * @package  Arcanesoft\Pages\Providers
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class CommandServiceProvider extends ServiceProvider
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
        $this->registerPublishCommand();
        $this->registerSetupCommand();

        $this->commands($this->commands);
    }

    /**
     * Get the provided commands.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'arcanesoft.pages.commands.publish',
            'arcanesoft.pages.commands.setup',
        ];
    }

    /* ------------------------------------------------------------------------------------------------
 |  Command Functions
 | ------------------------------------------------------------------------------------------------
 */
    /**
     * Register the publish command.
     */
    private function registerPublishCommand()
    {
        $this->app->singleton(
            'arcanesoft.pages.commands.publish',
            \Arcanesoft\Pages\Console\PublishCommand::class
        );

        $this->commands[] = \Arcanesoft\Pages\Console\PublishCommand::class;
    }

    /**
     * Register the setup command.
     */
    private function registerSetupCommand()
    {
        $this->app->singleton(
            'arcanesoft.pages.commands.setup',
            \Arcanesoft\Pages\Console\SetupCommand::class
        );

        $this->commands[] = \Arcanesoft\Pages\Console\SetupCommand::class;
    }
}
