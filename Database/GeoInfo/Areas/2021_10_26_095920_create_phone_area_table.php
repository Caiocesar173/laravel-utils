<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreatePhoneAreaTable.
 */
class CreatePhoneAreaTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('phone_area', function(Blueprint $table) {
            $table->uuid('id')->primary();

			$table->string('code', 100)->nullable();
			$table->string('mobile', 100)->nullable();
			$table->string('landline', 100)->nullable();
			$table->string('gdp', 100)->nullable();
    
			$table->uuid('country');			
			$table->foreign('country')->references('id')->on('country')->onDelete('cascade');
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
        Schema::disableForeignKeyConstraints();
        Schema::drop('phone_area');
        Schema::enableForeignKeyConstraints();
	}
}
