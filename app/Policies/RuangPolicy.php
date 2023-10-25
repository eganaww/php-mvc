<?php

namespace App\Policies;

use App\Models\Ruang;
use App\Models\petugas;
use Illuminate\Auth\Access\Response;

class RuangPolicy
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
    public function view(petugas $petugas, Ruang $ruang): bool
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
    public function update(petugas $petugas, Ruang $ruang): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(petugas $petugas, Ruang $ruang): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(petugas $petugas, Ruang $ruang): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(petugas $petugas, Ruang $ruang): bool
    {
        //
    }
}
