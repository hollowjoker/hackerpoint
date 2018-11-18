<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__banks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_info_id')->default(0);
            $table->char('account_name',50)->nullable();
            $table->char('account_number',20)->nullable();
            $table->char('bank_name',30)->nullable();
            $table->char('bank_code',20)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user__banks');
    }
}
