<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class Bayar extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "bayar";
    
    protected $primaryKey = 'id_pembayaran';
    protected $fillable = [
        'email_teknisi',
        'keahlian_teknisi',
        'tgl_booking',
        'total_bayar',
        'bukti_byr',
        'status',
        'id_pelanggan',
    ];
}
