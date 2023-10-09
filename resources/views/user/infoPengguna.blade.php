{{-- 6706223009 - Muhammad Raihan Fahrifi --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $user->username }}
        </h2>
    </x-slot>
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>{{ __("View Informasi Pengguna") }}</h2>
                    <table class="table-auto w-full mt-4 border border-collapse">
                   @php
                        $jenisKelaminLabels = [
                            '1' => 'Pria',
                            '2' => 'Wanita',
                        ];
                    @endphp
                        <tr>
                            <th class="px-4 py-2 border">Username</th>
                            <td class="px-4 py-2 border">{{ $user->username }}</td>
                        </tr>
                        <tr>
                            <th class="px-4 py-2 border">Nama Lengkap</th>
                            <td class="px-4 py-2 border">{{ $user->fullname }}</td>
                        </tr>
                        <tr>
                            <th class="px-4 py-2 border">Jenis Kelamini</th>
                            <td class="px-4 py-2 border">{{ $jenisKelaminLabels[$user->jenisKelamin] }}</td>
                        </tr>
                        <tr>
                            <th class="px-4 py-2 border">Alamat</th>
                            <td class="px-4 py-2 border">{{ $user->address }}</td>
                        </tr>
                        <tr>
                            <th class="px-4 py-2 border">Nomor Telepon</th>
                            <td class="px-4 py-2 border">{{ $user->phoneNumber }}</td>
                        </tr>
                        <tr>
                            <th class="px-4 py-2 border">Tanggal Lahir</th>
                            <td class="px-4 py-2 border">{{ $user->birthdate }}</td>
                        </tr>
                        <tr>
                            <th class="px-4 py-2 border">Agama</th>
                            <td class="px-4 py-2 border">{{ $user->agama }}</td>
                        </tr>
                        <!-- Tambahkan informasi lainnya sesuai dengan kebutuhan -->
                    </table>
                </div>
            </div>
        </div>
    </div>
   </x-app-layout>
   
   

