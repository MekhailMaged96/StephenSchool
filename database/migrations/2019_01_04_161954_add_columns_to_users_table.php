<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
           $table->string('rank')->nullable();
           $table->string('address')->nullable();
           $table->integer('phone');
           $table->unsignedInteger('team_id')->nullable();
           $table->foreign('team_id')->references('id')->on('teams')
           ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('rank');
            $table->dropColumn('address');
            $table->dropColumn('phone');
            $table->dropColumn('team_id');
        });
    }
}
