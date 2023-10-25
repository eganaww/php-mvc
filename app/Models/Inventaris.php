<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_inventaris';
    protected $table = 'inventaris';
    protected $fillable = [
        'nama',
        'kondisi',
        'keterangan',
        'jumlah',
        'id_jenis',
        'id_ruang',
        'kode_inventaris',
        'id_petugas'
    ];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'id_jenis');
    }

    public function ruang()
    {
        return $this->belongsTo(Ruangs::class, 'id_ruang');
    }

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'id_petugas');
    }
}
