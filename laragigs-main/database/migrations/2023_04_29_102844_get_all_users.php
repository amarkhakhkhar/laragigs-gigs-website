<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $procedure = "DROP PROCEDURE IF EXISTS `get_users`;
        CREATE PROCEDURE `get_users` (IN idx int)
        BEGIN
        SELECT * FROM posts WHERE user_id = idx;
        END;";

        DB::unprepared($procedure);
        $procedure1 = "DROP PROCEDURE IF EXISTS `delete_user`;
        CREATE PROCEDURE `delete_user` (IN idx int)
        BEGIN
        delete from users where id=idx;
        END;";

        DB::unprepared($procedure1);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
