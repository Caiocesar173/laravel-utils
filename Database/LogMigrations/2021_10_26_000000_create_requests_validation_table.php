<?php

use Caiocesar173\Utils\Enum\StatusEnum;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateRequestsValidationTable.
 */
class CreateRequestsValidationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests_validation', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->json('url');
            $table->json('body');

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
        Schema::dropIfExists('requests_validations');
    }
}
