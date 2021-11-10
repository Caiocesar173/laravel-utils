<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateStateTable.
 */
class CreateStateTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('state', function(Blueprint $table) {
            $table->uuid('id')->primary();

			$table->string('name', 255);
			$table->string('code', 255)->nullable();
			$table->string('geonameid', 255);
			$table->string('latitude', 255)->nullable();
			$table->string('longitude', 255)->nullable();
			
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
        Schema::drop('state');
        Schema::enableForeignKeyConstraints();
	}
}
