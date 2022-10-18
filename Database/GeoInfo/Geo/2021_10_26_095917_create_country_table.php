<?php

use Caiocesar173\Utils\Enum\StatusEnum;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCountryTable.
 */
class CreateCountryTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('country', function (Blueprint $table) {
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

			$table->uuid('continent');
			$table->foreign('continent')->references('id')->on('continent')->onDelete('cascade');

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
		Schema::drop('country');
		Schema::enableForeignKeyConstraints();
	}
}
