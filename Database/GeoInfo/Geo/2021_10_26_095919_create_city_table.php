<?php

use Caiocesar173\Utils\Enum\StatusEnum;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCityTable.
 */
return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cities', function (Blueprint $table) {
			$table->uuid('id')->primary();
			$table->string('name', 255);
			$table->string('code', 255)->nullable();
			$table->string('geonameid', 255);
			$table->uuid('state');
			$table->string('latitude', 255)->nullable();
			$table->string('longitude', 255)->nullable();
			$table->foreignUuid('state')->references('id')->on('states')->onDelete('cascade');
			$table->enum('status', StatusEnum::lists())->default(StatusEnum::ACTIVE);
			$table->timestamps();
			$table->softDeletes();
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
		Schema::drop('cities');
		Schema::enableForeignKeyConstraints();
	}
};
