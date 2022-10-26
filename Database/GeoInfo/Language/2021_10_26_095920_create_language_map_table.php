<?php

use Caiocesar173\Utils\Enum\StatusEnum;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateLanguageTable.
 */
class CreateLanguageMapTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('language_maps', function (Blueprint $table) {
			$table->uuid('id')->primary();
			$table->uuid('country');
			$table->uuid('language');
			$table->foreignUuid('country')->references('id')->on('countries')->onDelete('cascade');
			$table->foreignUuid('language')->references('id')->on('languages')->onDelete('cascade');
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
		Schema::drop('language_maps');
		Schema::enableForeignKeyConstraints();
	}
}
