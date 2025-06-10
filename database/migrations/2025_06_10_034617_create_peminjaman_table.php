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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id('PeminjamanID');
            $table->unsignedBigInteger('MemberID');
            $table->foreign('MemberID')->references('MemberID')->on('member');
            $table->date('TanggalPinjam');
            $table->date('TanggalJatuhTempo');
            $table->date('TanggalKembaliAktual')->nullable();
            $table->enum('Status', ['dipinjam', 'selesai'])->default('dipinjam');
            $table->decimal('TotalDenda', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
