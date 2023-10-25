<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;

    protected $table = 'ruangs';
    protected $primaryKey = 'id_ruang';
    protected $fillable = ['nama_ruang', 'kode_ruang', 'keterangan_ruang'];
}
