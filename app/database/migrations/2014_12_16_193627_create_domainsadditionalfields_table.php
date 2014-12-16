<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDomainsadditionalfieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('domainsadditionalfields', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('domainid')->unsigned()->default(0000000000);
			$table->text('name', 65535);
			$table->text('value', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('domainsadditionalfields');
	}

}
