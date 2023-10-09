{{-- 6706223009 - Muhammad Raihan Fahrifi --}}

<x-app-layout>
 <x-slot name="header">
     <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
         {{ __('Detail Koleksi') }}
     </h2>
 </x-slot>

 <div class="py-12">
     <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
             <div class="p-6 text-gray-900 dark:text-gray-100">
                 <h2>{{ __("Detail Koleksi Perpustakaan") }}</h2>
                 <table class="table-auto w-full mt-4 border border-collapse">
                @php
                     $jenisKoleksiLabels = [
                         '1' => 'Buku',
                         '2' => 'Majalah',
                         '3' => 'Cakram Digital',
                     ];
                 @endphp
                     <tr>
                         <th class="px-4 py-2 border">Nama Koleksi</th>
                         <td class="px-4 py-2 border">{{ $collection->namaKoleksi }}</td>
                     </tr>
                     <tr>
                         <th class="px-4 py-2 border">Jenis Koleksi</th>
                         <td class="px-4 py-2 border">{{ $jenisKoleksiLabels[$collection->jenisKoleksi] }}</td>
                     </tr>
                     <tr>
                         <th class="px-4 py-2 border">Jumlah Koleksi</th>
                         <td class="px-4 py-2 border">{{ $collection->jumlahKoleksi }}</td>
                     </tr>
                     <!-- Tambahkan informasi lainnya sesuai dengan kebutuhan -->
                 </table>
             </div>
         </div>
     </div>
 </div>
</x-app-layout>

