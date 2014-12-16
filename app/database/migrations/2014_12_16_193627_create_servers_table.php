<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servers', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('name', 65535);
			$table->text('ipaddress', 65535);
			$table->decimal('monthlycost', 10)->default(0.00);
			$table->text('noc', 65535);
			$table->text('statusaddress', 65535);
			$table->text('primarynameserver', 65535);
			$table->text('primarynameserverip', 65535);
			$table->text('secondarynameserver', 65535);
			$table->text('secondarynameserverip', 65535);
			$table->integer('maxaccounts');
			$table->text('type', 65535);
			$table->text('username', 65535);
			$table->text('password', 65535);
			$table->text('secure', 65535);
			$table->text('active', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servers');
	}

}
