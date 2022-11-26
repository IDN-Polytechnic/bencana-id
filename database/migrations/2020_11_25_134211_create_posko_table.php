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
            $table->unsignedBigInteger('alamat_id');
            $table->foreign('alamat_id')->references('id')->on('alamat');
            $table->string('link_gps');
            $table->string('kordinator')->nullable();
            $table->string('telp_kordinator')->nullable();
            $table->unsignedBigInteger('relawan_user');
            $table->foreign('relawan_user')->references('id')->on('users');
            $table->unsignedBigInteger('lembaga_id');
            $table->foreign('lembaga_id')->references('id')->on('lembaga');
            $table->integer('jumblah_korban')->nullable();
            $table->unsignedBigInteger('status_id')->default(1);
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