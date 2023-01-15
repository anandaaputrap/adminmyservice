<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    public $timestamps = false;
    protected $table = "admin";
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_admin',
        'email_admin',
        'nohp_admin',
        'username_admin',
        'password_admin',
        'norek_admin',
        'level',
    ];
}
