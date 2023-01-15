<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class Pelanggan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "pelanggan";
    public $timestamps = false;
    protected $primaryKey = 'id_pelanggan';
    protected $fillable = [
        'nama_pelanggan',
        'alamat_pelanggan',
        'nohp_pelanggan',
        'email_pelanggan',
        'pass_pelanggan',
    ];
}
