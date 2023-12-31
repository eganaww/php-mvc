<?php

namespace App\Models;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Level;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class petugas extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'id_petugas';
    protected $guarded = ['id_petugas'];
    protected $table = 'petugas';
    protected $fillable = [
        'username',
        'password',
        'nama_petugas',
        'id_level',
    ];

    public function level()
    {
        return $this->belongsTo(Level::class, 'id_level');
    }
}
