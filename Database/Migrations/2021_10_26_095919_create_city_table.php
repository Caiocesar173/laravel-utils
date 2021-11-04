<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCityTable.
 */
class CreateCityTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('city', function(Blueprint $table) {
            $table->uuid('id')->primary();
            
			$table->string('name', 255);
			$table->string('code', 255)->nullable();
			$table->string('geonameid', 255);
			$table->uuid('state');
			$table->string('latitude', 255);
			$table->string('longitude', 255);
			
			$table->foreign('state')->references('id')->on('state')->onDelete('cascade');
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
        Schema::drop('city');
        Schema::enableForeignKeyConstraints();
	}
}
