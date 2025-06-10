<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopUp extends Model
{
    use HasFactory;

    protected $table = 'topup';
    protected $primaryKey = 'TopUpID';

    protected $fillable = [
        'MemberID',
        'TanggalTopUp',
        'Jumlah',
    ];

    /**
     * Mendefinisikan relasi "belongsTo" ke model Member.
     */
    public function member()
    {
        return $this->belongsTo(Member::class, 'MemberID');
    }
}
