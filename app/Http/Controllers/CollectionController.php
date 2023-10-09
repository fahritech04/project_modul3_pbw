<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;

class CollectionController extends Controller
{
    /**
     * 6706223009 - Muhammad Raihan Fahrifi
     */
    public function index()
    {
        $collections = Collection::all();
        return view('koleksi.daftarKoleksi', compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('koleksi.registrasi');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'namaKoleksi' => 'required|string|max:255',
            'jenisKoleksi' => 'required|string|max:255',
            'jumlahKoleksi' => 'required|integer',
        ]);

        // Simpan data koleksi ke dalam database
        $collection = new Collection();
        $collection->namaKoleksi = $validatedData['namaKoleksi'];
        $collection->jenisKoleksi = $validatedData['jenisKoleksi'];
        $collection->jumlahKoleksi = $validatedData['jumlahKoleksi'];
        $collection->save();

        // Redirect kembali ke halaman sebelumnya atau ke halaman lain yang Anda inginkan
        return redirect()->route('koleksi')->with('success', 'Data koleksi telah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $collection = Collection::find($id);

        return view('koleksi.infoKoleksi', compact('collection'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $collections = Collection::findOrFail($id); // Mengambil data yang ingin diedit
        // return view('koleksi.edit', compact('collections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'namaKoleksi' => 'required|string|max:255',
        //     'jenisKoleksi' => 'required|in:1,2,3',
        //     'jumlahKoleksi' => 'required|integer',
        // ]);
    
        // $collections = Collection::findOrFail($id);
        // $collections->namaKoleksi = $request->namaKoleksi;
        // $collections->jenisKoleksi = $request->jenisKoleksi;
        // $collections->jumlahKoleksi = $request->jumlahKoleksi;
        // $collections->save();
    
        // return redirect()->route('koleksi.daftarKoleksi')
        //     ->with('success', 'Data koleksi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collection $collection)
    {
        try {
            // Hapus koleksi berdasarkan ID
            $collection->delete();

            return redirect()->route('koleksi')->with('success', 'Koleksi berhasil dihapus.');
        } catch (\Exception $e) {
            // Tangani jika terjadi kesalahan
            return redirect()->route('koleksi')->with('error', 'Gagal menghapus koleksi.');
        }
    }
}
