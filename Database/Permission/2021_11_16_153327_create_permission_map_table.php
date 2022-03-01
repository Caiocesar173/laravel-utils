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

            $table->string('responsable_type', 255);
            $table->char('responsable_id', 36);

            $table->string('permission_type', 255);
            $table->char('permission_id', 36);

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
