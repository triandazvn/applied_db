<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $primaryKey = 'KategoriID';

    protected $fillable = [
        'NamaKategori',
    ];

    /**
     * Mendefinisikan relasi "hasMany" ke model Buku.
     */
    public function buku()
    {
        return $this->hasMany(Buku::class, 'KategoriID');
    }
}
