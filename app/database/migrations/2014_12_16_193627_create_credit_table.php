<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreditTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('credit', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('clientid')->unsigned()->default(0000000000);
			$table->date('date')->default('0000-00-00');
			$table->text('description', 65535);
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
		Schema::drop('credit');
	}

}
