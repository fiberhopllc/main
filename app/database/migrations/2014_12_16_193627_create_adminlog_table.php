<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('adminlog', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('adminusername', 65535);
			$table->dateTime('logintime')->default('0000-00-00 00:00:00');
			$table->dateTime('logouttime')->default('0000-00-00 00:00:00');
			$table->text('ipaddress', 65535);
			$table->text('sessionid', 65535);
			$table->dateTime('lastvisit')->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('adminlog');
	}

}
