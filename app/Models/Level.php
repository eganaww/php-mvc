<?php

namespace App\Models;

use App\Models\petugas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_level';

    protected $guarded = 'id_level';
    protected $fillable = ['nama_level'];

    public function petugas()
    {
        return $this->hasMany(petugas::class, 'id_petugas');
    }
}
