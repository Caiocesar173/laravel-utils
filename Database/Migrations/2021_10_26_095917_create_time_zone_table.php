<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateTimeZoneTable.
 */
class CreateTimeZoneTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('time_zone', function(Blueprint $table) {
            $table->uuid('id')->primary();

			$table->string("abbreviation", 255);
			$table->string("offset", 255);
			$table->string("offset_name", 255);
			$table->string("name", 255);
			$table->string("tz_name", 255);

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
        Schema::drop('time_zone');
        Schema::enableForeignKeyConstraints();
	}
}
