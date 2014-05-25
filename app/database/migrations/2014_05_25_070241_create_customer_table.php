<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function($table)
    	{
			$table->increments('customer_id');
	        $table->string('firstname');
	        $table->string('lastname');
	        $table->string('email')->unique();
	        $table->string('telephone');
	        $table->integer('cart');
	        $table->timestamps();
  		});	        
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customers');
	}

}