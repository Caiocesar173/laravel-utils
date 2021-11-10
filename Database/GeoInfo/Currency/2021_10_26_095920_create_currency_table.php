<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCurrencyTable.
 */
class CreateCurrencyTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('currency', function(Blueprint $table) {
            $table->uuid('id')->primary();

			$table->string('name', 255);
			$table->string('code', 255)->nullable();
			$table->string('currency_symbol', 255)->nullable();
			$table->string('tld', 255)->nullable();
			
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
        Schema::drop('currency');
        Schema::enableForeignKeyConstraints();
	}
}
