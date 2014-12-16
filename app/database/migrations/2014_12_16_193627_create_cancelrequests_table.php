<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCancelrequestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cancelrequests', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->dateTime('date')->default('0000-00-00 00:00:00');
			$table->integer('relid')->unsigned()->default(0000000000);
			$table->text('reason', 65535);
			$table->text('type', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cancelrequests');
	}

}
