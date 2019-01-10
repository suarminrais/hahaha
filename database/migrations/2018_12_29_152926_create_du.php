<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->integer('extra_1')->unsigned()->default(0);
            $table->integer('extra_2')->unsigned()->default(0);
            $table->integer('extra_3')->unsigned()->default(0);
            $table->integer('extra_4')->unsigned()->default(0);
            $table->integer('extra_5')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
