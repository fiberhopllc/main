<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admins', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('username', 65535);
			$table->string('password', 32);
			$table->text('firstname', 65535);
			$table->text('lastname', 65535);
			$table->text('email', 65535);
			$table->text('userlevel', 65535);
			$table->text('signature', 65535);
			$table->text('notes', 65535);
			$table->integer('loginattempts');
			$table->text('supportdepts', 65535);
			$table->char('ticketnotifications', 2);
			$table->char('_order_notifications', 2);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admins');
	}

}
