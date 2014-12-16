<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUpgradesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('upgrades', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->text('type', 65535);
			$table->date('date')->default('0000-00-00');
			$table->integer('relid');
			$table->text('originalvalue', 65535);
			$table->text('newvalue', 65535);
			$table->decimal('amount', 10)->default(0.00);
			$table->decimal('recurringchange', 10)->default(0.00);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('upgrades');
	}

}
