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
        Schema::create('member', function (Blueprint $table) {
            $table->id('MemberID');
            $table->string('Nama', 100);
            $table->string('Email', 100)->unique();
            $table->decimal('Deposit', 10, 2)->default(0);
            $table->boolean('StatusBlacklist')->default(false);
            $table->date('TanggalBlacklistSelesai')->nullable();
            $table->date('TanggalDaftar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
