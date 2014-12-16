<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReselleraccountsetupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reselleraccountsetup', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('packageid', 65535);
			$table->text('resnumlimit', 65535);
			$table->text('resnumlimitamt', 65535);
			$table->text('rsnumlimitenabled', 65535);
			$table->text('reslimit', 65535);
			$table->text('resreslimit', 65535);
			$table->text('rslimitdisk', 65535);
			$table->text('rsolimitdisk', 65535);
			$table->text('rslimitbw', 65535);
			$table->text('rsolimitbw', 65535);
			$table->text('acllistaccts', 65535);
			$table->text('aclshowbandwidth', 65535);
			$table->text('aclcreateacct', 65535);
			$table->text('acleditaccount', 65535);
			$table->text('aclsuspendacct', 65535);
			$table->text('aclkillacct', 65535);
			$table->text('aclupgradeaccount', 65535);
			$table->text('acllimitbandwidth', 65535);
			$table->text('acleditmx', 65535);
			$table->text('aclfrontpage', 65535);
			$table->text('aclmodsubdomains', 65535);
			$table->text('aclpasswd', 65535);
			$table->text('aclquota', 65535);
			$table->text('aclrescart', 65535);
			$table->text('aclsslgencrt', 65535);
			$table->text('aclssl', 65535);
			$table->text('acldemosetup', 65535);
			$table->text('aclrearrangeaccts', 65535);
			$table->text('aclclustering', 65535);
			$table->text('aclcreatedns', 65535);
			$table->text('acleditdns', 65535);
			$table->text('aclparkdns', 65535);
			$table->text('aclkilldns', 65535);
			$table->text('acladdpkg', 65535);
			$table->text('acleditpkg', 65535);
			$table->text('acladdpkgshell', 65535);
			$table->text('aclallowunlimiteddiskpkgs', 65535);
			$table->text('aclallowunlimitedpkgs', 65535);
			$table->text('acladdpkgip', 65535);
			$table->text('aclallowaddoncreate', 65535);
			$table->text('aclallowparkedcreate', 65535);
			$table->text('aclonlyselfandglobalpkgs', 65535);
			$table->text('acldisallowshell', 65535);
			$table->text('aclall', 65535);
			$table->text('aclstats', 65535);
			$table->text('aclstatus', 65535);
			$table->text('aclrestart', 65535);
			$table->text('aclmailcheck', 65535);
			$table->text('aclresftp', 65535);
			$table->text('aclnews', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reselleraccountsetup');
	}

}
