<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';
    protected $primaryKey = 'BookingID';

    protected $fillable = [
        'MemberID',
        'BukuID',
        'TanggalBooking',
        'Status',
        'PriorityOrder',
    ];

    /**
     * Mendefinisikan relasi "belongsTo" ke model Member.
     */
    public function member()
    {
        return $this->belongsTo(Member::class, 'MemberID');
    }

    /**
     * Mendefinisikan relasi "belongsTo" ke model Buku.
     */
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'BukuID');
    }
}
