<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateLanguageTable.
 */
class CreateLanguageTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('language', function(Blueprint $table) {
            $table->uuid('id')->primary();

			$table->string('code', 100)->nullable();
			$table->string('name', 100)->nullable();
			$table->string('native', 100)->nullable();
			
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
        Schema::drop('language');
        Schema::enableForeignKeyConstraints();
	}
}
