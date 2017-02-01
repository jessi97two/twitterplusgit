<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTweetsgroupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweetsgroupes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idgroupe');
            $table->integer('iduser');
            $table->integer('nblike');
            $table->integer('nbdislike');
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
        Schema::drop('tweetsgroupes');
    }
}
