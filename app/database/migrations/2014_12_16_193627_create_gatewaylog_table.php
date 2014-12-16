<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGatewaylogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gatewaylog', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->dateTime('date')->default('0000-00-00 00:00:00');
			$table->text('gateway', 65535);
			$table->text('data', 65535);
			$table->text('result', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gatewaylog');
	}

}
