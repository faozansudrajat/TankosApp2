<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->unsigned();
            $table->string('name');
            $table->string('noTelp');
            $table->string('address');
            $table->bigInteger('quantity');
            $table->bigInteger('jumlah');
            $table->binary('proofofpayment')->nullable();
            $table->char('status', 1)->default(0)->comment('0: diproses, 1: ditolak, 2: selesai');
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
};
