<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabaTable extends Migration
{
    public function up()
    {
        Schema::create('laba', function (Blueprint $table) {
            $table->id();
            $table->string('periode'); // format 'YYYY-MM' untuk per bulan, atau 'YYYY' untuk per tahun
            $table->decimal('total_penjualan', 15, 2);
            $table->decimal('total_pembelian', 15, 2);
            $table->decimal('laba_kotor', 15, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('laba');
    }
}
