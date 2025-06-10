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
         Schema::create('topup', function (Blueprint $table) {
            $table->id('TopUpID');
            $table->unsignedBigInteger('MemberID');
            $table->foreign('MemberID')->references('MemberID')->on('member');
            $table->date('TanggalTopUp');
            $table->decimal('Jumlah', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topup');
    }
};
