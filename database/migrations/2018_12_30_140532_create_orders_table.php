<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->string('by');
            $table->string('pic');
            $table->string('gambar')->nullable();
            $table->string('orientasi')->nullable();
            $table->string('instruksi')->nullable();
            $table->integer('total')->default(0)->nullable();
            $table->string('status')->default('PROSES')->nullable();
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
        Schema::dropIfExists('orders');
    }
}