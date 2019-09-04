<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePemeriksaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pemeriksaan', function (Blueprint $table) {
            $table->bigIncrements('id_pemeriksaan');
            $table->integer('id_pasien');
            $table->integer('id_user');
            $table->integer('id_poli');
            $table->integer('id_resep');
            $table->integer('id_tindakan');
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
        Schema::dropIfExists('table_pemeriksaan');
    }
}
