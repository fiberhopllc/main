<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentgatewaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paymentgateways', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('gateway', 65535);
			$table->text('type', 65535);
			$table->text('setting', 65535);
			$table->text('value', 65535);
			$table->text('name', 65535);
			$table->integer('size');
			$table->text('notes', 65535);
			$table->text('description', 65535);
			$table->integer('_order_');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('paymentgateways');
	}

}
