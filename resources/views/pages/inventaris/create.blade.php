@extends('layouts/app')

@section('konten')
<div class="min-h-screen flex items-center justify-center w-auto">
    <div class="bg-white p-8 rounded-lg shadow-lg w-1/2">
        <a href="{{route('datainventaris')}}" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">< Kembali</a>
        <h1 class="text-2xl font-semibold mb-6 mt-5 text-center">Buat Inventarisir Data Baru</h1>
        <form action="{{route('datainvent.store')}}" method="POST">
            @csrf
            @method('POST')
        <div class="mb-6">
            <label for="nama-barang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Barang</label>
            <input type="text" name="nama" id="nama-barang" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="kondisi-barang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kondisi Barang</label>
            <input type="text" name="kondisi" id="kondisi-barang" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
            <input type="text" name="keterangan"  id="keterangan" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
            <input type="text" name="jumlah"   id="jumlah" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="id-jenis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Jenis</label>
            <input type="text" name="id_jenis" id="id-jenis" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="id-ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Ruang</label>
            <input type="text" name="id_ruang" id="id-ruang" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="kode-inventaris" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Inventaris</label>
            <input type="text" name="kode_inventaris" id="kode-inventaris" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="id-petugas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Petugas</label>
            <input type="text" name="id_petugas" id="id-petugas" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <button type="submit" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-lg mb-6 inline-block text-center hover:bg-blue-600">Create</button>
        </form>
    </div>
</div>

@endsection