<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate Laporan</title>
    @vite(['resources/css/input.css'])
</head>
<body>
    <div class="p-5 mt-5 space-y-10 relative overflow-x-scroll shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Barang
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kondisi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Keterangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jumlah
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ID Jenis
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Register
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ID Ruang
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kode Inventaris
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ID Petugas
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataInventaris as $invent)
                <tr class="bg-white border-2 dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$invent->id_inventaris}}
                    </th>
                    <td class="px-6 py-4">
                        {{$invent->nama}}
                    </td>
                    <td class="px-6 py-4">
                        {{$invent->kondisi}}
                    </td>
                    <td class="px-6 py-4">
                        {{$invent->keterangan}}
                    </td>
                    <td class="px-6 py-4">
                        {{$invent->jumlah}}
                    </td>
                    <td class="px-6 py-4">
                        {{$invent->id_jenis}}
                    </td>
                    <td class="px-6 py-4">
                        {{$invent->created_at}}
                    </td>
                    <td class="px-6 py-4">
                        {{$invent->id_ruang}}
                    </td>
                    <td class="px-6 py-4">
                        {{$invent->kode_inventaris}}
                    </td>
                    <td class="px-6 py-4">
                        {{$invent->id_petugas}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <script>
       window.addEventListener("load", function () {
            window.print();
        });
    </script>
</body>
</html>
