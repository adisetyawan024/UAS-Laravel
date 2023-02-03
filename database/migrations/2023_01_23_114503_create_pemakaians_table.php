<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemakaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemakaians', function (Blueprint $table) {
            $table->id();
            $table->string('kodeTagihan')->unique();
            $table->string('bulan',3); //1,2,3 dst
            $table->string('tahun',5); //2022, 2023, dst
            $table->string('pemakaianBlnIni',10);
            $table->string('metode',20); //tunai, bca
            $table->string('status',20); //lunas, belum lunas
            $table->bigInteger('id_pelanggan');
            $table->bigInteger('id_admin');
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
        Schema::dropIfExists('pemakaians');
    }
}
