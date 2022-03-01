<?php

use Caiocesar173\Utils\Enum\PermissionItemTypeEnum;
use Caiocesar173\Utils\Enum\StatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_item', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('name', 220);
			$table->string('code', 220)->nullable();

            $table->string('icon', 220)->nullable();
			$table->string('icon_type', 220)->nullable();

            $table->enum('type', PermissionItemTypeEnum::keys())->nullable();
            $table->enum('status', StatusEnum::keys());
          
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
        Schema::dropIfExists('permission_item');
    }
}
