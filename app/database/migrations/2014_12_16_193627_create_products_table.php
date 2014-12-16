<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('type', 65535);
			$table->integer('gid');
			$table->text('name', 65535);
			$table->text('description', 65535);
			$table->text('hidden', 65535);
			$table->text('showdomainoptions', 65535);
			$table->integer('welcomeemail');
			$table->text('stockcontrol', 65535);
			$table->integer('qty');
			$table->text('proratabilling', 65535);
			$table->integer('proratadate');
			$table->integer('proratachargenextmonth');
			$table->text('paytype', 65535);
			$table->decimal('msetupfee', 10)->default(0.00);
			$table->decimal('qsetupfee', 10)->default(0.00);
			$table->decimal('ssetupfee', 10)->default(0.00);
			$table->decimal('asetupfee', 10)->default(0.00);
			$table->decimal('bsetupfee', 10)->default(0.00);
			$table->decimal('monthly', 10)->default(0.00);
			$table->decimal('quarterly', 10)->default(0.00);
			$table->decimal('semiannual', 10)->default(0.00);
			$table->decimal('annual', 10)->default(0.00);
			$table->decimal('biennial', 10)->default(0.00);
			$table->text('subdomain', 65535);
			$table->text('autosetup', 65535);
			$table->text('servertype', 65535);
			$table->integer('defaultserver');
			$table->text('configoption1', 65535);
			$table->text('configoption2', 65535);
			$table->text('configoption3', 65535);
			$table->text('configoption4', 65535);
			$table->text('configoption5', 65535);
			$table->text('configoption6', 65535);
			$table->text('configoption7', 65535);
			$table->text('configoption8', 65535);
			$table->text('configoption9', 65535);
			$table->text('configoption10', 65535);
			$table->text('configoption11', 65535);
			$table->text('configoption12', 65535);
			$table->text('configoption13', 65535);
			$table->text('configoption14', 65535);
			$table->text('configoption15', 65535);
			$table->text('configoption16', 65535);
			$table->text('configoption17', 65535);
			$table->text('configoption18', 65535);
			$table->text('configoption19', 65535);
			$table->text('configoption20', 65535);
			$table->text('configoption21', 65535);
			$table->text('configoption22', 65535);
			$table->text('configoption23', 65535);
			$table->text('configoption24', 65535);
			$table->text('freedomain', 65535);
			$table->text('freedomainpaymentterms', 65535);
			$table->text('freedomaintlds', 65535);
			$table->text('upgradepackages', 65535);
			$table->text('configoptionsupgrade', 65535);
			$table->text('billingcycleupgrade', 65535);
			$table->integer('tax');
			$table->text('affiliateonetime', 65535);
			$table->text('affiliatepaytype', 65535);
			$table->decimal('affiliatepayamount', 10)->default(0.00);
			$table->text('downloads', 65535);
			$table->integer('_order_');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
