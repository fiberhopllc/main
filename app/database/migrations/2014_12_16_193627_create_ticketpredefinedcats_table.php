<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketpredefinedcatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticketpredefinedcats', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('parentid');
			$table->text('name', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticketpredefinedcats');
	}

}
