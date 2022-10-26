<?php

use Caiocesar173\Utils\Enum\StatusEnum;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreatePhoneAreaTable.
 */
class CreatePhoneAreaTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('phone_areas', function(Blueprint $table) {
            $table->uuid('id')->primary();
			$table->string('code', 100)->nullable();
			$table->string('mobile', 100)->nullable();
			$table->string('landline', 100)->nullable();
			$table->string('gdp', 100)->nullable();
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
        Schema::drop('phone_areas');
        Schema::enableForeignKeyConstraints();
	}
}
