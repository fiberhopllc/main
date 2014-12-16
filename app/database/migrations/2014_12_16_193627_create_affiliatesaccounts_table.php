<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAffiliatesaccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('affiliatesaccounts', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('affiliateid', 65535);
			$table->text('domain', 65535);
			$table->text('package', 65535);
			$table->text('billingcycle', 65535);
			$table->date('regdate');
			$table->decimal('amount', 10)->default(0.00);
			$table->decimal('commission', 10)->default(0.00);
			$table->date('lastpaid')->default('0000-00-00');
			$table->integer('relid')->unsigned()->default(0000000000);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('affiliatesaccounts');
	}

}
