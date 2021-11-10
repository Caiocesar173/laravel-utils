<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateRequestsLogTable.
 */
class CreateRequestsLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests_log', function(Blueprint $table) {
            $table->uuid('id')->primary();

            $table->text('route')->nullable();
            $table->json('user_agent')->nullable();
            $table->text('status')->nullable();
            $table->smallInteger('code')->nullable();
            $table->text('type')->nullable();
            
            $table->json('body')->nullable();
            $table->json('header')->nullable();
            $table->json('response')->nullable();

            $table->text('token')->nullable();
            $table->text('url')->nullable();
            $table->text('ip')->nullable();
            $table->text('mac')->nullable();
            $table->text('location')->nullable();
            
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
        Schema::dropIfExists('requests_log');
    }
}
