<?php namespace Arcanesoft\Pages\Console;

use Arcanedev\Support\Bases\Command;

/**
 * Class     SetupCommand
 *
 * @package  Arcanesoft\Pages\Console
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class SetupCommand extends Command
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
    protected $signature   = 'pages:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup the Pages module.';

    /* ------------------------------------------------------------------------------------------------
     |  Main Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->runSeeders();
    }

    /* ------------------------------------------------------------------------------------------------
     |  Other Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Run the Auth database seeder.
     */
    private function runSeeders()
    {
        $this->call('db:seed', [
            '--class' => \Arcanesoft\Pages\Seeds\DatabaseSeeder::class
        ]);
    }
}
