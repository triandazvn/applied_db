<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatDeposit extends Model
{
     use HasFactory;

    protected $table = 'riwayat_deposit';
    protected $primaryKey = 'RiwayatID';

    protected $fillable = [
        'MemberID',
        'Tanggal',
        'JenisTransaksi',
        'Jumlah',
        'Keterangan',
    ];

    /**
     * Mendefinisikan relasi "belongsTo" ke model Member.
     */
    public function member()
    {
        return $this->belongsTo(Member::class, 'MemberID');
    }
}
