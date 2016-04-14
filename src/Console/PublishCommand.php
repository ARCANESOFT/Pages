<?php namespace Arcanesoft\Pages\Console;

use Arcanedev\Support\Bases\Command;

/**
 * Class     PublishCommand
 *
 * @package  Arcanesoft\Pages\Console
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class PublishCommand extends Command
{
    /* ------------------------------------------------------------------------------------------------
     |  Properties
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature   = 'pages:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish pages config, migrations and other stuff.';

    /* ------------------------------------------------------------------------------------------------
     |  Main Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('vendor:publish', [
            '--provider' => \Arcanesoft\Pages\PagesServiceProvider::class,
        ]);
    }
}
