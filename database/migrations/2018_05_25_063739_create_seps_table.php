<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seps', function (Blueprint $table) {
            $table->increments('id');
            $table->string("day");
            $table->string("month");
            $table->string("year");
            $table->string("item");
            $table->integer("cost");
            $table->integer("users_id");
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
        Schema::dropIfExists('seps');
    }
}
