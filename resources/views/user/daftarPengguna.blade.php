{{-- 6706223009 - Muhammad Raihan Fahrifi --}}

<x-app-layout>
 <x-slot name="header">
     <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
         {{ __('Daftar Pengguna') }}
     </h2>
 </x-slot>

 <div class="py-12">
     <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
             <div class="p-6 text-gray-900 dark:text-gray-100">
                 <h2>{{ __("Daftar Pengguna") }}</h2>
                 @if(count($users) === 0)
                        <p>Data koleksi kosong.</p>
                    @else
                        <table class="table-auto w-full mt-4 border border-collapse">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 border">Username</th>
                                    <th class="px-4 py-2 border">Nama Lengkap</th>
                                    <th class="px-4 py-2 border">Jenis Kelamin</th>
                                    <th class="px-4 py-2 border">Alamat</th>
                                    <th class="px-4 py-2 border">Nomor Telepon</th>
                                    <th class="px-4 py-2 border">Tanggal Lahir</th>
                                    <th class="px-4 py-2 border">Agama</th>
                                    <th class="px-4 py-2 border">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $jenisKelaminLabels = [
                                        '1' => 'Pria',
                                        '2' => 'Wanita',
                                    ];
                                @endphp
                                @foreach($users as $user)
                                    <tr>
                                        <td class="px-4 py-2 border">{{ $user->username }}</td>
                                        <td class="px-4 py-2 border">{{ $user->fullname }}</td>
                                        <td class="px-4 py-2 border">{{ $jenisKelaminLabels[$user->jenisKelamin] }}</td>
                                        <td class="px-4 py-2 border">{{ $user->address }}</td>
                                        <td class="px-4 py-2 border">{{ $user->phoneNumber }}</td>
                                        <td class="px-4 py-2 border">{{ $user->birthdate }}</td>
                                        <td class="px-4 py-2 border">{{ $user->agama }}</td>
                                        <td class="px-4 py-2 border">
                                            <a href="{{ route('user.infoPengguna', $user->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">View</a>
                                            {{-- <a href="{{ route('koleksi.update', $collection->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">View</a> --}}
                                            
                                            {{-- <form action="{{ route('koleksi.update', $collection->id) }}" method="PUT" class="inline">
                                                @csrf
                                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                            </form> --}}
                                            {{-- <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                            </form> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
             </div>
         </div>

         <div class="flex items-center justify-end mt-4">
             <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                 <a href="{{ route('koleksi.registrasi') }}">Tambah Data</a>
             </button>
         </div>
     </div>
 </div>
</x-app-layout>
