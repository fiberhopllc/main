<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAffiliatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('affiliates', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->date('date');
			$table->integer('clientid')->unsigned()->default(0000000000);
			$table->integer('visitors');
			$table->text('paytype', 65535);
			$table->decimal('payamount', 10)->default(0.00);
			$table->decimal('balance', 10)->default(0.00);
			$table->decimal('withdrawn', 10)->default(0.00);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('affiliates');
	}

}
