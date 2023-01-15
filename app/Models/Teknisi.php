<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class Teknisi extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "teknisi";
    public $timestamps = false;
    protected $primaryKey = 'id_teknisi';
    protected $fillable = [
        'nama_teknisi',
        'email_teknisi',
        'pass_teknisi',
        'nohp_teknisi',
        'alamat_teknisi',
        'norek_teknisi',
        'foto',
        'keahlian_teknisi',
        'tarif_teknisi',
        'status_teknisi',
    ];
}
