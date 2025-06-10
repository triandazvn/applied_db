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
        Schema::create('riwayat_deposit', function (Blueprint $table) {
            $table->id('RiwayatID');
            $table->unsignedBigInteger('MemberID');
            $table->foreign('MemberID')->references('MemberID')->on('member');
            $table->date('Tanggal');
            $table->enum('JenisTransaksi', ['topup', 'peminjaman', 'denda']);
            $table->decimal('Jumlah', 10, 2); // Bisa positif (topup) atau negatif (bayar)
            $table->text('Keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_deposits');
    }
};
