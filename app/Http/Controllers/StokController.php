<?php


namespace App\Http\Controllers;


use App\Models\Stok;
use Illuminate\Http\Request;


class StokController extends Controller {
   //Menampilkan semua data suplier
   public function index()
   {
       $stoks = Stok::paginate(10); // 10 data per halaman
       return view('stok.index', compact('stoks'));
   }
   


   //Menampilkan form untuk membuat suplier baru
   public function create()
   {
       return view('stok.create');
   }


   // Menyimpan data Supplier ke database
   public function store(Request $request)
   {
       $validated = $request->validate([
           'id' => 'required|integer',
           'nama_barang' => 'required|string|max:255',
           'jml_masuk' => 'required|integer|max:11',
           'jml_keluar' => 'required|integer|max:11',
           'total_barang' => 'required|integer|max:11',
       ]);


       Stok::create($validated);


       return redirect()->route('stok.index')->with('success', 'User berhasil ditambahkan.');
   }


   // Menghapus data Supplier dari database
   public function destroy(Stok $stoks)
   {
       $stoks->delete();


       return redirect()->route('stok.index')->with('success', 'Data User berhasil dihapus.');
   }


   // Show the edit form for a specific supplier
   public function edit($id)
   {
       $stoks = Stok::find($id);


       // Check if the supplier exists
       if (!$stoks) {
           return redirect()->route('stok.index')->with('error', 'User not found.');
       }
       return view('stok.edit', compact('stoks'));
   }


   public function update(Stok $stoks, Request $request)
   {
       // Validasi data request jika diperlukan
       $validatedData = $request->validate([
        'nama_barang' => 'required|string|max:255',
           'jml_masuk' => 'required|integer|max:11',
           'jml_keluar' => 'required|integer|max:11',
           'total_barang' => 'required|integer|max:11',
       ]);


       // Update data suplier
       $stoks->update($validatedData);


       return redirect()->route('stok.index')->with('success', 'User data successfully updated.');
   }
}
