<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHostingaddonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hostingaddons', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('_order_id');
			$table->integer('hostingid')->unsigned()->default(0000000000);
			$table->text('name', 65535);
			$table->decimal('setupfee', 10)->default(0.00);
			$table->decimal('recurring', 10)->default(0.00);
			$table->text('billingcycle', 65535);
			$table->text('status', 65535);
			$table->date('regdate')->default('0000-00-00');
			$table->date('nextduedate');
			$table->date('nextinvoicedate')->default('0000-00-00');
			$table->text('paymentmethod', 65535);
			$table->text('subscriptionid', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hostingaddons');
	}

}
