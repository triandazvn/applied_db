<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terhubung dengan model.
     *
     * @var string
     */
    protected $table = 'peminjaman';

    /**
     * Primary key untuk model.
     *
     * @var string
     */
    protected $primaryKey = 'PeminjamanID';

    /**
     * Atribut yang bisa diisi secara massal.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'MemberID',
        'TanggalPinjam',
        'TanggalJatuhTempo',
        'TanggalKembaliAktual',
        'Status',
        'TotalDenda',
    ];

    /**
     * Mendefinisikan relasi "belongsTo" ke model Member.
     */
    public function member()
    {
        return $this->belongsTo(Member::class, 'MemberID');
    }

    /**
     * Mendefinisikan relasi "hasMany" ke model DetailPeminjaman.
     */
    public function detailPeminjaman()
    {
        return $this->hasMany(DetailPeminjaman::class, 'PeminjamanID');
    }
}
