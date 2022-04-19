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
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id')->comment('メンバーID');
            $table->string('name', 80)->comment("名前");
            $table->string('email', 100)->comment("メール");
            $table->string('sex')->nullable()->comment("性的");
            $table->string("phone")->nullable()->comment("電話番号");
            $table->unsignedInteger('address_id')->comment('住所ID');
            $table->timestamps();
            $table->softDeletes();
            // foreign keys
            $table->foreign('address_id')->references('id')->on('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
};
