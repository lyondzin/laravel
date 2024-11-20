<?php


namespace App\Http\Controllers;


use App\Models\BarangMasuk;
use Illuminate\Http\Request;


class BarangMasukController extends Controller {
   //Menampilkan semua data suplier
   public function index()
   {
       $BarangMasuks = BarangMasuk::paginate(10); // 10 data per halaman
       return view('BarangMasuk.index', compact('BarangMasuks'));
   }
   


   //Menampilkan form untuk membuat suplier baru
   public function create()
   {
       return view('BarangMasuk.create');
   }


   // Menyimpan data Supplier ke database
   public function store(Request $request)
   {
       $validated = $request->validate([
           'id_barang' => 'required|integer',
           'nama_barang' => 'required|string|max:255',
           'tgl_masuk' => 'required|date',
           'jml_masuk' => 'required|integer|max:11',
           'id' => 'required|integer|max:20',
       ]);


       BarangMasuk::create($validated);


       return redirect()->route('BarangMasuk.index')->with('success', 'User berhasil ditambahkan.');
   }


   // Menghapus data Supplier dari database
   public function destroy(BarangMasuk $BarangMasuks)
   {
       $BarangMasuks->delete();


       return redirect()->route('BarangMasuk.index')->with('success', 'Data User berhasil dihapus.');
   }


   // Show the edit form for a specific supplier
   public function edit($id)
   {
       $BarangMasuks = BarangMasuk::find($id);


       // Check if the supplier exists
       if (!$BarangMasuks) {
           return redirect()->route('BarangMasuk.index')->with('error', 'User not found.');
       }
       return view('BarangMasuk.edit', compact('BarangMasuks'));
   }


   public function update(BarangMasuk $BarangMasuks, Request $request)
   {
       // Validasi data request jika diperlukan
       $validatedData = $request->validate([
        'nama_barang' => 'required|string|max:255',
        'tgl_masuk' => 'required|date',
        'jml_masuk' => 'required|integer|max:11',
        'id' => 'required|integer|max:20',
       ]);

 
       // Update data suplier
       $BarangMasuks->update($validatedData);


       return redirect()->route('BarangMasuk.index')->with('success', 'User data successfully updated.');
   }
}
