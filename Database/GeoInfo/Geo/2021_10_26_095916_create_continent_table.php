<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateContinentTable.
 */
class CreateContinentTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('continent', function(Blueprint $table) {
            $table->uuid('id')->primary();

			$table->string('name', 255);
			$table->string('code', 15);

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
        Schema::drop('continent');
        Schema::enableForeignKeyConstraints();
	}
}
