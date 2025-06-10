<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terhubung dengan model.
     *
     * @var string
     */
    protected $table = 'buku';

    /**
     * Primary key untuk model.
     *
     * @var string
     */
    protected $primaryKey = 'BukuID';

    /**
     * Atribut yang bisa diisi secara massal.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Judul',
        'PenulisID',
        'KategoriID',
        'HargaSewa',
        'StatusKetersediaan',
    ];

    /**
     * Mendefinisikan relasi "belongsTo" ke model Penulis.
     */
    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'PenulisID');
    }

    /**
     * Mendefinisikan relasi "belongsTo" ke model Kategori.
     */
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'KategoriID');
    }

    /**
     * Mendefinisikan relasi "hasMany" ke model DetailPeminjaman.
     */
    public function detailPeminjaman()
    {
        return $this->hasMany(DetailPeminjaman::class, 'BukuID');
    }
}
