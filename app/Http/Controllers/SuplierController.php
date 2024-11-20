<?php

namespace App\Http\Controllers;

use App\Models\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    // Menampilkan semua data suplier
    public function index()
    {
        $supliers = Suplier::all();
        return view('suplier.index', compact('supliers'));
    }

    // Menampilkan form untuk membuat suplier baru
    public function create()
    {
        return view('suplier.create');
    }

    // Menyimpan data Suplier ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_supplier' => 'required|integer|unique:supliers,id_supplier',
            'nama_supplier' => 'required|string|max:255',
            'alamat_supplier' => 'nullable|string|max:255',
            'telepon_supplier' => 'nullable|string|max:15',
        ], [
            'id_supplier.required' => 'ID Supplier wajib diisi.',
            'id_supplier.unique' => 'ID Supplier sudah terdaftar.',
            'nama_supplier.required' => 'Nama Supplier wajib diisi.',
            'telepon_supplier.max' => 'Nomor telepon maksimal 15 karakter.',
        ]);

        try {
            Suplier::create($validated);

            return redirect()->route('suplier.index')
                ->with('success', 'Supplier berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
        }
    }

    // Menampilkan form edit untuk data supplier tertentu
    public function edit(Suplier $suplier)
    {
        return view('suplier.edit', compact('suplier'));
    }

    // Memperbarui data suplier
    public function update(Request $request, Suplier $suplier)
    {
        $validatedData = $request->validate([
            'nama_supplier' => 'required|string|max:255',
            'alamat_supplier' => 'nullable|string|max:255',
            'telepon_supplier' => 'nullable|string|max:15',
        ], [
            'nama_supplier.required' => 'Nama Supplier wajib diisi.',
        ]);

        try {
            $suplier->update($validatedData);

            return redirect()->route('suplier.index')
                ->with('success', 'Data Supplier berhasil diperbarui.');
        } catch (\Exception $e) {
            return back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat memperbarui data: ' . $e->getMessage());
        }
    }

    // Menghapus data supplier
    public function destroy(Suplier $suplier)
    {
        try {
            $suplier->delete();

            return redirect()->route('suplier.index')
                ->with('success', 'Data Supplier berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('suplier.index')
                ->with('error', 'Terjadi kesalahan saat menghapus data: ' . $e->getMessage());
        }
    }
}
