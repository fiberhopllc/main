<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->bigInteger('_order_num');
			$table->integer('userid')->unsigned()->default(0000000000);
			$table->dateTime('date')->default('0000-00-00 00:00:00');
			$table->integer('hostingid');
			$table->text('domainids', 65535);
			$table->text('addonids', 65535);
			$table->text('upgradeids', 65535);
			$table->text('domaintype', 65535);
			$table->text('nameservers', 65535);
			$table->text('transfersecret', 65535);
			$table->text('promocode', 65535);
			$table->text('promotype', 65535);
			$table->text('promovalue', 65535);
			$table->decimal('amount', 10)->default(0.00);
			$table->text('paymentmethod', 65535);
			$table->integer('invoiceid');
			$table->text('status', 65535);
			$table->text('ipaddress', 65535);
			$table->text('fraudmodule', 65535);
			$table->text('fraudoutput', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}
