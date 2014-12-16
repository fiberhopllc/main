<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAffiliateshistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('affiliateshistory', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('affiliateid')->unsigned()->default(000);
			$table->date('date')->default('0000-00-00');
			$table->integer('affaccid');
			$table->decimal('amount', 10)->default(0.00);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('affiliateshistory');
	}

}
