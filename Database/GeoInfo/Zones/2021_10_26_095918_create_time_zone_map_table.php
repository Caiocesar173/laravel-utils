<?php

use Caiocesar173\Utils\Enum\StatusEnum;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateTimeZoneMapTable.
 */
class CreateTimeZoneMapTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('time_zone_map', function (Blueprint $table) {
			$table->uuid('id')->primary();

			$table->uuid('zone');
			$table->uuid('country');

			$table->foreign('zone')->references('id')->on('time_zone')->onDelete('cascade');
			$table->foreign('country')->references('id')->on('country')->onDelete('cascade');

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
		Schema::drop('time_zone_map');
		Schema::enableForeignKeyConstraints();
	}
}
