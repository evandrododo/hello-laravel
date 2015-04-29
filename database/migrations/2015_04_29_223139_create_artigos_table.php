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
      $table->string('titulo');
      $table->text('corpo');
			$table->timestamps();
			$table->timestamp('publicado_em');
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
