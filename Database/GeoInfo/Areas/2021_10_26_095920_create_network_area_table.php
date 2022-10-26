<?php

use Caiocesar173\Utils\Enum\StatusEnum;

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
		Schema::create('network_areas', function(Blueprint $table) {
            $table->uuid('id')->primary();
			$table->string('hosts', 100)->nullable();
			$table->string('users', 100)->nullable();
			$table->string('level_domain', 100)->nullable();
			$table->string('iso2', 100)->nullable();
			$table->string('iso3', 100)->nullable();
			$table->string('iso_numeric', 100)->nullable();
			$table->string('area_km2', 100)->nullable();
			$table->string('e164', 100)->nullable();
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
        Schema::drop('network_areas');
        Schema::enableForeignKeyConstraints();
	}
}
