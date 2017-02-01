<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('groupes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomgroupe')->unique();
            $table->string('description');
            $table->integer('idadmin');
            $table->integer('nbparticipant');
            $table->integer('nbtweets');
            $table->rememberToken();
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
        Schema::drop('groupes');
    }
}
