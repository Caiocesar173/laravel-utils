<?php

use Caiocesar173\Utils\Enum\StatusEnum;
use Caiocesar173\Utils\Enum\PermissionItemTypeEnum;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_items', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 220);
            $table->string('code', 220)->unique();
            $table->string('icon', 220)->nullable();
            $table->string('icon_type', 220)->nullable();
            $table->enum('type', PermissionItemTypeEnum::keys())->nullable();
            $table->enum('status', StatusEnum::keys())->default(StatusEnum::ACTIVE);
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
        Schema::dropIfExists('permission_items');
    }
}
