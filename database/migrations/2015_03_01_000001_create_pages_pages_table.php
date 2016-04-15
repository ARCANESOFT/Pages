<?php

use Arcanesoft\Pages\Bases\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class     CreatePagesTable
 *
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class CreatePagesPagesTable extends Migration
{
    /* ------------------------------------------------------------------------------------------------
     |  Constructor
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * CreatePagesPagesTable constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->setTable('pages');
    }

    /* ------------------------------------------------------------------------------------------------
     |  Main Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createSchema(function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('author_id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->string('template')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unique('slug');
        });
    }
}
