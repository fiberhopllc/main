<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accounts', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('userid')->unsigned()->default(0000000000);
			$table->text('gateway', 65535);
			$table->dateTime('date');
			$table->text('description', 65535);
			$table->decimal('amountin', 10)->default(0.00);
			$table->decimal('fees', 10)->default(0.00);
			$table->decimal('amountout', 10)->default(0.00);
			$table->text('transid', 65535);
			$table->integer('invoiceid');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('accounts');
	}

}
