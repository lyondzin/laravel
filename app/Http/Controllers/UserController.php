<?php


namespace App\Http\Controllers;


use App\Models\Users;
use Illuminate\Http\Request;


class UserController extends Controller {
   //Menampilkan semua data suplier
   public function index()
   {
       $users = Users::paginate(10); // 10 data per halaman
       return view('user.index', compact('users'));
   }
   


   //Menampilkan form untuk membuat suplier baru
   public function create()
   {
       return view('user.create');
   }


   // Menyimpan data Supplier ke database
   public function store(Request $request)
   {
       $validated = $request->validate([
           'id' => 'required|integer',
           'name' => 'required|string|max:255',
           'username' => 'required|string|max:191',
           'password' => 'required|string|max:255',
           'level' => 'required|string|max:255',
       ]);


       Users::create($validated);


       return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan.');
   }


   // Menghapus data Supplier dari database
   public function destroy(Users $user)
   {
       $user->delete();


       return redirect()->route('user.index')->with('success', 'Data User berhasil dihapus.');
   }


   // Show the edit form for a specific supplier
   public function edit($id)
   {
       $user = Users::find($id);


       // Check if the supplier exists
       if (!$user) {
           return redirect()->route('user.index')->with('error', 'User not found.');
       }
       return view('user.edit', compact('user'));
   }


   public function update(Users $user, Request $request)
   {
       // Validasi data request jika diperlukan
       $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'username' => 'required|string|max:191',
        'password' => 'required|string|max:255',
        'level' => 'required|string|max:255',
       ]);


       // Update data suplier
       $user->update($validatedData);


       return redirect()->route('user.index')->with('success', 'User data successfully updated.');
   }
}
