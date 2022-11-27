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
        Schema::create('poskos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alamat')->nullable();
            $table->string('link_gps')->nullable();
            $table->string('kordinator')->nullable();
            $table->string('contact_pos')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('delegation_id')->nullable();
            $table->foreign('delegation_id')->references('id')->on('delegations');
            $table->string('pengungsi')->nullable();
            $table->string('notes')->nullable();
            $table->unsignedBigInteger('status_id')->nullable()->default(3);
            $table->foreign('status_id')->references('id')->on('statuses');
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
        Schema::dropIfExists('poskos');
    }
};