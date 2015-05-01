<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtigosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artigos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
      $table->string('titulo');
      $table->text('corpo');
			$table->timestamps();
			$table->timestamp('publicado_em');

			$table->foreign('user_id')
						->references('id')
						->on('users')
						->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('artigos');
	}

}
