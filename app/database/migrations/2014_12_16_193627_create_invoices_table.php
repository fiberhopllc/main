<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoices', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('invoicenum', 65535);
			$table->date('date');
			$table->date('duedate');
			$table->dateTime('datepaid')->default('0000-00-00 00:00:00');
			$table->integer('userid')->unsigned()->default(0000000000);
			$table->decimal('subtotal', 10)->default(0.00);
			$table->decimal('credit', 10)->default(0.00);
			$table->decimal('tax', 10)->default(0.00);
			$table->decimal('total', 10)->default(0.00);
			$table->decimal('taxrate', 10)->default(0.00);
			$table->text('status', 65535);
			$table->text('randomstring', 65535);
			$table->text('paymentmethod', 65535);
			$table->text('notes', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('invoices');
	}

}
