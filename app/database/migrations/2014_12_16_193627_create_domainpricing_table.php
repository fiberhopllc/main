<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDomainpricingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('domainpricing', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('extension', 65535);
			$table->integer('registrationperiod');
			$table->decimal('register', 10)->default(0.00);
			$table->decimal('transfer', 10)->default(0.00);
			$table->decimal('renew', 10)->default(0.00);
			$table->text('autoreg', 65535);
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
		Schema::drop('domainpricing');
	}

}
