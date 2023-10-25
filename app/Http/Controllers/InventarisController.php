<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use App\Http\Requests\StoreInventarisRequest;
use App\Http\Requests\UpdateInventarisRequest;
use Illuminate\Support\Facades\Auth;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petugas = Auth::guard('petugas')->user();
        $dataInventaris = Inventaris::all();
        return view('pages.inventaris.index', compact('petugas', 'dataInventaris'));
    }


    public function laporan()
    {
        $dataInventaris = Inventaris::all();
        return view('pages.laporan.index', compact('dataInventaris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $petugas = Auth::guard('petugas')->user();
        return view('pages.inventaris.create', compact('petugas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventarisRequest $request)
    {

        $result = $request->validate([
            'nama' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required',
            'id_jenis' => 'required',
            'id_ruang' => 'required',
            'kode_inventaris' => 'required',
            'id_petugas' => 'required'
        ]);


        Inventaris::create($result);
        return redirect('/dashboard/inventaris');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventaris $inventaris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventaris $inventaris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventarisRequest $request, Inventaris $inventaris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $invent = Inventaris::where('id_inventaris', $id)->first();
        $invent->delete();

        return redirect('/dashboard/inventaris');
    }
}
