<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTutorialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tutorials', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 50)->unique();
			$table->text('content');
			$table->string('description', 255);
			$table->string('image', 250);
			$table->integer('user_id')->unsigned();
		    $table->foreign('user_id')->references('id')->on('users');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tutorials');
	}

}
