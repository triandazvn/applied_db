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
        Schema::create('booking', function (Blueprint $table) {
            $table->id('BookingID');
            $table->unsignedBigInteger('MemberID');
            $table->foreign('MemberID')->references('MemberID')->on('member');
            $table->unsignedBigInteger('BukuID');
            $table->foreign('BukuID')->references('BukuID')->on('buku');
            $table->date('TanggalBooking');
            $table->enum('Status', ['waiting', 'dipinjam', 'batal'])->default('waiting');
            $table->integer('PriorityOrder');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
