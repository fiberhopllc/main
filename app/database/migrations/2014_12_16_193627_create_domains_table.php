<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDomainsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('domains', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('userid')->unsigned()->default(0000000000);
			$table->integer('_order_id');
			$table->date('registrationdate')->default('0000-00-00');
			$table->text('domain', 65535);
			$table->decimal('firstpaymentamount', 10)->default(0.00);
			$table->decimal('recurringamount', 10)->default(0.00);
			$table->text('registrar', 65535);
			$table->integer('registrationperiod')->default(1);
			$table->date('expirydate');
			$table->text('subscriptionid', 65535);
			$table->text('status', 65535);
			$table->date('nextduedate')->default('0000-00-00');
			$table->date('nextinvoicedate')->default('0000-00-00');
			$table->text('additionalnotes', 65535);
			$table->text('paymentmethod', 65535);
			$table->text('urlforwarding', 65535);
			$table->text('emailforwarding', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('domains');
	}

}
