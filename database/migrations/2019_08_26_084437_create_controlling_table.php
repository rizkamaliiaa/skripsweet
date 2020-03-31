<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControllingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controlling', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_alat',10)->unique();
            $table->time('jam1');
            $table->time('jam2');
            $table->time('jam3')->nullable();
            $table->time('jam4')->nullable();
            $table->time('jam5')->nullable();
            $table->integer('k_min');
            $table->integer('k_max');
            $table->integer('jumlah_unggas');
            $table->timestamps();
            $table->foreign('kode_alat')->references('kode_alat')->on('device')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('controlling');
    }
}
