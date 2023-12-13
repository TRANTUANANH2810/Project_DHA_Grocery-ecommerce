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
        Schema::create('cart', function (Blueprint $table) {
            $table->comment('Cart');
            $table->integer('id', true)->comment('Primary Key');
            $table->dateTime('created_at')->nullable()->useCurrent()->comment('Create At');
            $table->dateTime('updated_at')->nullable()->useCurrent()->comment('Updated At');
            $table->integer('user_id')->nullable()->index('cart_user_id');
            $table->float('total_price', 10, 0)->nullable();
            $table->integer('qty')->nullable();
            $table->text('comment')->nullable();
            $table->boolean('is_active')->nullable()->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
};
