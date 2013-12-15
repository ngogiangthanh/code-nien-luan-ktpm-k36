<?php

use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('tags', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->string('mo_ta_tags', 50)->unique();
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('tags');
    }
}