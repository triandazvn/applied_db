<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPeminjaman extends Model
{
    use HasFactory;

    protected $table = 'detail_peminjaman';
    protected $primaryKey = 'DetailID';

    protected $fillable = [
        'PeminjamanID',
        'BukuID',
        'HargaSewa',
        'KondisiSaatKembali',
        'DendaKerusakan',
        'Status',
    ];

    /**
     * Mendefinisikan relasi "belongsTo" ke model Peminjaman.
     */
    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class, 'PeminjamanID');
    }

    /**
     * Mendefinisikan relasi "belongsTo" ke model Buku.
     */
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'BukuID');
    }
}
