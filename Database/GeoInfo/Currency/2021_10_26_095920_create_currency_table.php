<?php

use Caiocesar173\Utils\Enum\StatusEnum;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCurrencyTable.
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
		Schema::create('currencies', function (Blueprint $table) {
			$table->uuid('id')->primary();
			$table->string('name', 255);
			$table->string('code', 5)->unique();
			$table->string('symbol', 255);

			if (env('UTILS_GEOLOC_ENABLE'))
				$table->foreignUuid('country')->nullable()->references('id')->on('countries')->onDelete('cascade');
			else
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
		Schema::drop('currencies');
		Schema::enableForeignKeyConstraints();
	}
};
