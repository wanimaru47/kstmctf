<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title');
			$table->string('url');
			$table->string('flag')->unique();
			$table->integer('creatorid')->references('uid')->on('ctfusers');
            $table->timestamps();
			$table->index('id');
			$table->index('creatorid');
			$table->index('flag');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('question');
    }
}
