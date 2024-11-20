<?php


namespace App\Http\Controllers;


use App\Models\PinjamBarang;
use Illuminate\Http\Request;


class PinjamBarangController extends Controller {
   //Menampilkan semua data suplier
   public function index()
   {
       $PinjamBarangs = PinjamBarang::paginate(10); // 10 data per halaman
       return view('PinjamBarang.index', compact('PinjamBarangs'));
   }
   


   //Menampilkan form untuk membuat suplier baru
   public function create()
   {
       return view('PinjamBarang.create');
   }


   // Menyimpan data Supplier ke database
   public function store(Request $request)
   {
       $validated = $request->validate([
           'id' => 'required|integer',
           'peminjam' => 'required|string|max:255',
           'tgl_pinjam' => 'required|date',
           'id' => 'required|integer',
           'jml_barang' => 'required|integer|max:11',
           'tgl_kembali' => 'required|date',
           'kondisi' => 'required|string|max:255',
       ]);


       PinjamBarang::create($validated);


       return redirect()->route('PinjamBarang.index')->with('success', 'User berhasil ditambahkan.');
   }


   // Menghapus data Supplier dari database
   public function destroy(PinjamBarang $PinjamBarangs)
   {
       $PinjamBarangs->delete();


       return redirect()->route('PinjamBarang.index')->with('success', 'Data User berhasil dihapus.');
   }


   // Show the edit form for a specific supplier
   public function edit($id)
   {
       $PinjamBarangs = PinjamBarang::find($id);


       // Check if the supplier exists
       if (!$PinjamBarangs) {
           return redirect()->route('PinjamBarang.index')->with('error', 'User not found.');
       }
       return view('PinjamBarang.edit', compact('PinjamBarangs'));
   }


   public function update(PinjamBarang $PinjamBarangs, Request $request)
   {
       // Validasi data request jika diperlukan
       $validatedData = $request->validate([
        'peminjam' => 'required|string|max:255',
           'tgl_pinjam' => 'required|date',
           'id' => 'required|integer',
           'jml_barang' => 'required|integer|max:11',
           'tgl_kembali' => 'required|date',
           'kondisi' => 'required|string|max:255',
       ]);


       // Update data suplier
       $PinjamBarangs->update($validatedData);


       return redirect()->route('PinjamBarang.index')->with('success', 'User data successfully updated.');
   }
}
