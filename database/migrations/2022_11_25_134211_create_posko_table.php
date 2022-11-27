<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posko', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alamat')->nullable();
            $table->string('link_gps')->nullable();
            $table->string('kordinator')->nullable();
            $table->string('telp_kordinator')->nullable();
            $table->unsignedBigInteger('relawan_user')->nullable();
            $table->foreign('relawan_user')->references('id')->on('users');
            $table->unsignedBigInteger('lembaga_id')->nullable();
            $table->foreign('lembaga_id')->references('id')->on('lembaga');
            $table->string('pengungsi')->nullable();
            $table->string('notes')->nullable();
            $table->unsignedBigInteger('status_id')->nullable()->default(3);
            $table->foreign('status_id')->references('id')->on('status');
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
        Schema::dropIfExists('posko');
    }
};