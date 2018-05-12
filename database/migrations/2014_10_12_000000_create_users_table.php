<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('provider_type', [0, 1, 2])->default(0);
            $table->string('img_src')->nullable();
            $table->tinyInteger('is_admin')->default(false);
            $table->tinyInteger('banned')->default(false);
            $table->tinyInteger('verified')->default(false);
            $table->double('paypal_balance', 8, 2)->default(false);
            $table->double('others', 8, 2)->default(false);
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
        Schema::dropIfExists('users');
    }
}
