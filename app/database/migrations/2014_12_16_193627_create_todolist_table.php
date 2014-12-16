<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTodolistTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('todolist', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->date('date')->default('0000-00-00');
			$table->text('title', 65535);
			$table->text('description', 65535);
			$table->integer('admin');
			$table->text('status', 65535);
			$table->date('duedate')->default('0000-00-00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('todolist');
	}

}
