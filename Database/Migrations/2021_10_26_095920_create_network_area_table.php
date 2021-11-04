<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateNetworkAreaTable.
 */
class CreateNetworkAreaTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('network_area', function(Blueprint $table) {
            $table->uuid('id')->primary();

			$table->string('hosts', 100)->nullable();
			$table->string('users', 100)->nullable();
			$table->string('level_domain', 100)->nullable();
			$table->string('iso2', 100)->nullable();
			$table->string('iso3', 100)->nullable();
			$table->string('iso_numeric', 100)->nullable();
			$table->string('area_km2', 100)->nullable();
			$table->string('e164', 100)->nullable();
    
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
        Schema::drop('network_area');
        Schema::enableForeignKeyConstraints();
	}
}
