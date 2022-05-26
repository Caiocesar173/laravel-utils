<?php

use Caiocesar173\Utils\Enum\StatusEnum;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateSeedsTable.
 */
class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
			$table->json('username')->nullable()->after('id');
			$table->json('avatar')->nullable()->after('id');
            $table->enum('status', StatusEnum::lists() )
                ->default(StatusEnum::ACTIVE)
                ->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('username');
            $table->dropColumn('avatar');
            $table->dropColumn('status');
        });
    }
}
