<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoiceitemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoiceitems', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('invoiceid', 65535);
			$table->integer('userid')->unsigned()->default(0000000000);
			$table->text('type', 65535);
			$table->integer('relid')->unsigned()->default(0000000000);
			$table->text('description', 65535);
			$table->decimal('amount', 10)->default(0.00);
			$table->integer('taxed');
			$table->date('duedate');
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
		Schema::drop('invoiceitems');
	}

}
