<?php


namespace App\Http\Controllers;


use App\Models\BarangKeluar;
use Illuminate\Http\Request;


class BarangKeluarController extends Controller {
   //Menampilkan semua data suplier
   public function index()
   {
       $BarangKeluars =  BarangKeluar::paginate(10); // 10 data per halaman
       return view(' BarangKeluar.index', compact('BarangKeluars'));
   }
   


   //Menampilkan form untuk membuat suplier baru
   public function create()
   {
       return view(' BarangKeluar.create');
   }


   // Menyimpan data Supplier ke database
   public function store(Request $request)
   {
       $validated = $request->validate([
           'id' => 'required|integer',
           'nama_barang' => 'required|string|max:255',
           'tgl_keluar' => 'required|date',
           'jml_keluar' => 'required|integer|max:11',
           'lokasi' => 'required|string|max:255',
           'penerima' => 'required|string|max:255',
       ]);


       BarangKeluar::create($validated);


       return redirect()->route('BarangKeluar.index')->with('success', 'User berhasil ditambahkan.');
   }


   // Menghapus data Supplier dari database
   public function destroy( BarangKeluar $BarangKeluars)
   {
       $BarangKeluars->delete();


       return redirect()->route('BarangKeluar.index')->with('success', 'Data User berhasil dihapus.');
   }


   // Show the edit form for a specific supplier
   public function edit($id)
   {
       $BarangKeluars =  BarangKeluar::find($id);


       // Check if the supplier exists
       if (!$BarangKeluars) {
           return redirect()->route('BarangKeluar.index')->with('error', 'User not found.');
       }
       return view('BarangKeluar.edit', compact('BarangKeluars'));
   }


   public function update( BarangKeluar $BarangKeluars, Request $request)
   {
       // Validasi data request jika diperlukan
       $validatedData = $request->validate([
        'id' => 'required|integer', 
           'nama_barang' => 'required|string|max:255',
           'tgl_keluar' => 'required|date',
           'jml_keluar' => 'required|integer|max:11',
           'lokasi' => 'required|string|max:255',
           'penerima' => 'required|string|max:255',
       ]);


       // Update data suplier
       $BarangKeluars->update($validatedData);


       return redirect()->route('BarangKeluar.index')->with('success', 'User data successfully updated.');
   }
}
