<?php

use Caiocesar173\Utils\Enum\StatusEnum;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateTimeZoneMapTable.
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
		Schema::create('time_zone_maps', function (Blueprint $table) {
			$table->uuid('id')->primary();
			$table->foreignUuid('zone')->references('id')->on('time_zones')->onDelete('cascade');
			$table->foreignUuid('country')->references('id')->on('countries')->onDelete('cascade');
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
		Schema::drop('time_zone_maps');
		Schema::enableForeignKeyConstraints();
	}
};
