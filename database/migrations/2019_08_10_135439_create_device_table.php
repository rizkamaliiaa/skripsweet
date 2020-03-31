<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unggas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->text('keterangan');
            $table->integer('berat_pakan');           
            $table->timestamps();
            
        });

        Schema::defaultStringLength(191);
        Schema::create('device', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('kode_alat',10)->unique();
            $table->unsignedBigInteger('unggas_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('unggas_id')->references('id')->on('unggas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unggas');
        Schema::dropIfExists('device');
    }
}
