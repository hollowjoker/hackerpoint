<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('credit_points')->default(0);
            $table->char('first_name',50);
            $table->char('complete_name',50);
            $table->enum('gender', ['male','female'])->nullable();
            $table->date('dob')->nullable();
            $table->text('address');
            $table->char('phone',50);
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
        Schema::dropIfExists('user__infos');
    }
}
