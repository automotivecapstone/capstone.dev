<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RunKandyMigration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Artisan::call('migrate', ['--package'=>'kandy-io/kandy-laravel']);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kandy_user_login');
		Schema::drop('kandy_live_chat_rate');
		Schema::drop('kandy_live_chat');
		Schema::drop('kandy_users');
	}

}
