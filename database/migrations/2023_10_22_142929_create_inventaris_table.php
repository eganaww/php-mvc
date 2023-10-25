<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->id('id_inventaris');
            $table->string('nama');
            $table->string('kondisi');
            $table->string('keterangan');
            $table->string('jumlah');
            $table->foreignId('id_jenis')->on('jenis');
            $table->foreignId('id_ruang')->on('ruangs');
            $table->string('kode_inventaris');
            $table->foreignId('id_petugas')->on('petugas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventaris');
    }
};
