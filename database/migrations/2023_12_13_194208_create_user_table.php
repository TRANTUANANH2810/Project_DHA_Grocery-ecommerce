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
        Schema::create('user', function (Blueprint $table) {
            $table->comment('User');
            $table->integer('id', true)->comment('Primary Key');
            $table->dateTime('created_at')->nullable()->useCurrent()->comment('Create At');
            $table->dateTime('updated_at')->nullable()->useCurrent()->comment('Updated At');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('user_name')->nullable();
            $table->string('password')->nullable();
            $table->string('email')->nullable();
            $table->string('phone', 20)->nullable();
            $table->text('image')->nullable();
            $table->string('confirm')->nullable();
            $table->boolean('is_active')->nullable()->default(true);
            $table->boolean('is_seller')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
};
