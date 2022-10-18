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
		Schema::create('language_map', function (Blueprint $table) {
			$table->uuid('id')->primary();

			$table->uuid('country');
			$table->uuid('language');

			$table->foreign('country')->references('id')->on('country')->onDelete('cascade');
			$table->foreign('language')->references('id')->on('language')->onDelete('cascade');
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
		Schema::drop('language_map');
		Schema::enableForeignKeyConstraints();
	}
}
