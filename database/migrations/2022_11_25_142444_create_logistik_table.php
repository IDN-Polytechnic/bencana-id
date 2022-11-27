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
        Schema::create('logistik', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('items');
            $table->integer('stock');
            $table->integer('demand');
            $table->bigInteger('votes')->nullable()->default(12);
            $table->foreign('satuan_id')->references('id')->on('satuan');
            $table->unsignedBigInteger('posko_id');
            $table->foreign('posko_id')->references('id')->on('posko');
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
        Schema::dropIfExists('logistik');
    }
};