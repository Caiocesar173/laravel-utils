<?php

use Caiocesar173\Utils\Enum\StatusEnum;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateSituationTable.
 */
class CreateSituationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('situation', function(Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 100)->default('Active');
            $table->tinyInteger('visible')->default(1);
            $table->tinyInteger('active')->default(1);
            $table->nullableMorphs('responsable');
            $table->enum('status', StatusEnum::keys())->default(StatusEnum::ACTIVE);

            $table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('situation');
    }
}
