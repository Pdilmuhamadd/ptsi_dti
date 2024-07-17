<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\purpleprint;
use Illuminate\Support\Facades\Schema;

class TambahKolomBaruToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (purpleprint $table) {
            $table->string('foto')->nullable()->after('password');
            $table->tinyInteger('level')->default(0)->after('foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (purpleprint $table) {
            $table->dropColumn([
                'foto',
                'level'
            ]);
        });
    }
}
