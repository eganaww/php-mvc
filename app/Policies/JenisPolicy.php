<?php

namespace App\Policies;

use App\Models\Jenis;
use App\Models\petugas;
use Illuminate\Auth\Access\Response;

class JenisPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(petugas $petugas): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(petugas $petugas, Jenis $jenis): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(petugas $petugas): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(petugas $petugas, Jenis $jenis): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(petugas $petugas, Jenis $jenis): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(petugas $petugas, Jenis $jenis): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(petugas $petugas, Jenis $jenis): bool
    {
        //
    }
}
