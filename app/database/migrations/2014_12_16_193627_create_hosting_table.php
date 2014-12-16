<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHostingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hosting', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('userid')->unsigned()->default(0000000000);
			$table->integer('_order_id');
			$table->date('regdate')->default('0000-00-00');
			$table->text('domain', 65535);
			$table->text('server', 65535);
			$table->text('paymentmethod', 65535);
			$table->decimal('firstpaymentamount', 10)->default(0.00);
			$table->decimal('amount', 10)->default(0.00);
			$table->text('billingcycle', 65535);
			$table->date('nextduedate');
			$table->date('nextinvoicedate');
			$table->text('domainstatus', 65535);
			$table->text('username', 65535);
			$table->text('password', 65535);
			$table->text('notes', 65535);
			$table->text('subscriptionid', 65535);
			$table->integer('packageid')->unsigned()->default(0000000000);
			$table->text('overideautosuspend', 65535);
			$table->text('dedicatedip', 65535);
			$table->text('assignedips', 65535);
			$table->text('rootpassword', 65535);
			$table->text('ns1', 65535);
			$table->text('ns2', 65535);
			$table->integer('diskusage');
			$table->integer('disklimit');
			$table->integer('bwusage');
			$table->integer('bwlimit');
			$table->dateTime('lastupdate')->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hosting');
	}

}
