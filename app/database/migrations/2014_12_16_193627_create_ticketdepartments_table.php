<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketdepartmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticketdepartments', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('name', 65535);
			$table->text('description', 65535);
			$table->text('email', 65535);
			$table->text('hidden', 65535);
			$table->integer('_order_');
			$table->text('host', 65535);
			$table->text('port', 65535);
			$table->text('login', 65535);
			$table->text('password', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticketdepartments');
	}

}
