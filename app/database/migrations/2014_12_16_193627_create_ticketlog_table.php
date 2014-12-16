<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticketlog', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->dateTime('date')->default('0000-00-00 00:00:00');
			$table->integer('tid')->unsigned()->default(0000000000);
			$table->text('action', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticketlog');
	}

}
