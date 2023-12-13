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
        Schema::create('seller', function (Blueprint $table) {
            $table->comment('Seller');
            $table->integer('id', true)->comment('Primary Key');
            $table->dateTime('created_at')->nullable()->useCurrent()->comment('Create At');
            $table->integer('user_id')->nullable()->index('seller_user_id');
            $table->dateTime('updated_at')->nullable()->useCurrent()->comment('Updated At');
            $table->string('shop_name')->nullable();
            $table->string('shop_address')->nullable();
            $table->float('wallet', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller');
    }
};
