<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionMapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_map', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->uuid('permission_id');			
			$table->foreign('permission_id')->references('id')->on('permission')->onDelete('cascade');

            $table->uuid('permission_item_id');			
			$table->foreign('permission_item_id')->references('id')->on('permission_item')->onDelete('cascade');

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
        Schema::dropIfExists('permission_map');
    }
}
