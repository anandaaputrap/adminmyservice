<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class Booking extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "booking";
    
    protected $primaryKey = 'id_booking';
    protected $fillable = [
        'tgl_booking',
        'email_teknisi',
        'keahlian_teknisi',
        'id_pelanggan',
        'status_booking',
    ];
}
