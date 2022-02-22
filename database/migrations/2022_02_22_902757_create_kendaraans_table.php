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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('jenis_kendaraan_id')->unsigned();
            $table->foreign('jenis_kendaraan_id')
            ->references('id')
            ->on('jenis_kendaraan')
            ->onDelete('cascade');

            $table->bigInteger('merek_id')->unsigned();
            $table->foreign('merek_id')
            ->references('id')
            ->on('merek')
            ->onDelete('cascade');

            $table->bigInteger('mesin_id')->unsigned();
            $table->foreign('mesin_id')
            ->references('id')
            ->on('mesin')
            ->onDelete('cascade');

            $table->string('nama');
            $table->longText('keterangan');
            $table->boolean('active');
            
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
        Schema::dropIfExists('kendaraans');
    }
};
