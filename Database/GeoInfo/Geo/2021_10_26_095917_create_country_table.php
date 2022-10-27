<?php

use Caiocesar173\Utils\Enum\StatusEnum;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCountryTable.
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
		Schema::create('countries', function (Blueprint $table) {
			$table->uuid('id')->primary();
			$table->string('name', 255);
			$table->string('code', 15);
			$table->string('capital', 45);
			$table->string('region', 45);
			$table->string('subregion', 45);
			$table->string('emoji', 45);
			$table->string('emojiU', 45);
			$table->string('latitude', 45);
			$table->string('longitude', 45);
			$table->string('geonameid', 255);
			$table->foreignUuid('continent')->references('id')->on('continents')->onDelete('cascade');
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
		Schema::drop('countries');
		Schema::enableForeignKeyConstraints();
	}
};