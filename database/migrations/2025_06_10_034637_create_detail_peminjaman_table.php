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
        Schema::create('detail_peminjaman', function (Blueprint $table) {
            $table->id('DetailID');
            $table->unsignedBigInteger('PeminjamanID');
            $table->foreign('PeminjamanID')->references('PeminjamanID')->on('peminjaman')->onDelete('cascade');
            $table->unsignedBigInteger('BukuID');
            $table->foreign('BukuID')->references('BukuID')->on('buku');
            $table->decimal('HargaSewa', 10, 2);
            $table->enum('KondisiSaatKembali', ['baik', 'rusak'])->nullable();
            $table->decimal('DendaKerusakan', 10, 2)->default(0);
            $table->enum('Status', ['dipinjam', 'selesai'])->default('dipinjam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_peminjaman');
    }
};
