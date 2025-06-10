<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terhubung dengan model.
     *
     * @var string
     */
    protected $table = 'member';

    /**
     * Primary key untuk model.
     *
     * @var string
     */
    protected $primaryKey = 'MemberID';

    /**
     * Atribut yang bisa diisi secara massal.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Nama',
        'Email',
        'Deposit',
        'StatusBlacklist',
        'TanggalBlacklistSelesai',
        'TanggalDaftar',
    ];

    /**
     * Mendefinisikan relasi "hasMany" ke model Peminjaman.
     */
    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'MemberID');
    }

    /**
     * Mendefinisikan relasi "hasMany" ke model Booking.
     */
    public function booking()
    {
        return $this->hasMany(Booking::class, 'MemberID');
    }

    /**
     * Mendefinisikan relasi "hasMany" ke model TopUp.
     */
    public function topup()
    {
        return $this->hasMany(TopUp::class, 'MemberID');
    }

    /**
     * Mendefinisikan relasi "hasMany" ke model RiwayatDeposit.
     */
    public function riwayatDeposit()
    {
        return $this->hasMany(RiwayatDeposit::class, 'MemberID');
    }
}
