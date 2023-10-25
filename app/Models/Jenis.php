<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;
    protected $table = 'jenis';
    protected $primaryKey = 'id_jenis';
    protected $fillable = ['nama_jenis', 'kode_jenis', 'keterangan_jenis'];
}
