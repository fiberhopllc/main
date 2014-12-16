<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKnowledgebaseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('knowledgebase', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('category', 65535);
			$table->text('title', 65535);
			$table->text('article', 65535);
			$table->integer('views');
			$table->integer('useful');
			$table->integer('votes');
			$table->text('private', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('knowledgebase');
	}

}
