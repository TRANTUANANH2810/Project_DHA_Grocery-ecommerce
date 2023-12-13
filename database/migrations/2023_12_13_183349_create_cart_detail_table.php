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
        Schema::create('cart_detail', function (Blueprint $table) {
            $table->comment('Cart Detail');
            $table->integer('id', true)->comment('Primary Key');
            $table->dateTime('created_at')->nullable()->useCurrent()->comment('Create At');
            $table->dateTime('updated_at')->nullable()->useCurrent()->comment('Updated At');
            $table->integer('cart_id')->nullable()->index('cart_detail_cart_id');
            $table->integer('product_id')->nullable()->index('cart_detail_product_id');
            $table->float('price', 10, 0)->nullable();
            $table->integer('qty')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_detail');
    }
};
