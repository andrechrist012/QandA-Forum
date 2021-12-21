<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_replies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('userId');
            $table->foreign('userid')->references('id')->on('ms_users');
            $table->unsignedInteger('threadId');
            $table->foreign('threadId')->references('id')->on('tr_threads');
            $table->string('message');
            $table->datetime('dateIn');
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
        Schema::dropIfExists('tr_replies');
    }
}
