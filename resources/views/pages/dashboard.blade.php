@extends('layouts/app')

@section('konten')
 <div class="p-4 sm:ml-64">
    <div class="">
        <h1>Selamat Datang <span class="text-violet-500 font-bold">{{$petugas->username}}</span>!</h1>
    </div>
    <div class="">
        <div class="flex flex-col justify-between items-center w-auto h-auto py-8 p-8 leading-normal gap-8 bg-white shadow-lg rounded-lg">
            <div class="w-full h-auto"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                <path d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM6.5 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3.014 13.021l.157-.625A3.427 3.427 0 0 1 6.5 9.571a3.426 3.426 0 0 1 3.322 2.805l.159.622-6.967.023ZM16 12h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Z"/>
              </svg></div>
            <h2 class="w-full h-auto">Username : {{$petugas->username}}</h2>
            <h3 class="w-full h-auto">Petugas Name : {{$petugas->nama_petugas}}</h3>
            <p class="w-full h-auto">Level : {{$petugas->id_level}}</p>
        </div>
    </div>
 </div>
@endsection
    