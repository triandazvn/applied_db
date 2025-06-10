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
        Schema::create('buku', function (Blueprint $table) {
            $table->id('BukuID');
            $table->string('Judul', 255);
            $table->unsignedBigInteger('PenulisID');
            $table->foreign('PenulisID')->references('PenulisID')->on('penulis');
            $table->unsignedBigInteger('KategoriID');
            $table->foreign('KategoriID')->references('KategoriID')->on('kategori');
            $table->decimal('HargaSewa', 10, 2);
            $table->enum('StatusKetersediaan', ['tersedia', 'dipinjam', 'rusak', 'booking'])->default('tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
