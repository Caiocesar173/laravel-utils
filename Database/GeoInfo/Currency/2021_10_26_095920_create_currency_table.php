<?php

use Caiocesar173\Utils\Enum\StatusEnum;

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
		Schema::create('currency', function (Blueprint $table) {
			$table->uuid('id')->primary();

			$table->string('name', 255);
			$table->string('code', 5)->unique();
			$table->string('symbol', 255);

			if (env('UTILS_GEOLOC_ENABLE')) {
				$table->uuid('country')->nullable();
				$table->foreign('country')->references('id')->on('country')->onDelete('cascade');
			} else
				$table->string('country', 100)->nullable();

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
		Schema::drop('currency');
		Schema::enableForeignKeyConstraints();
	}
}
