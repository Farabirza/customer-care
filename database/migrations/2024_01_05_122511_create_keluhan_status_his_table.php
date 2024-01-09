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
        Schema::create('keluhan_status_his', function (Blueprint $table) {
            $table->id();
            $table->string('status_keluhan', 1);
            $table->unsignedBigInteger('keluhan_id');
            $table->foreign('keluhan_id')->references('id')->on('keluhan_pelanggans')->onDelete('cascade');
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
        Schema::dropIfExists('keluhan_status_his');
    }
};
