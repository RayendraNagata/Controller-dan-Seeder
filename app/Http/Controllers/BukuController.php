<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku; 

class BukuController extends Controller
{
    public function index()
    {
        $data_buku = Buku::all()->sortByDesc('id');

        return view('buku.index', compact('data_buku'));
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request){
        $buku = new Buku();
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
    
        return redirect('/buku');

    }

    public function destroy($id){
        $buku = Buku::find($id);
        $buku->delete();

        return redirect('/buku');
    }

    public function edit($id){
        $buku = Buku::find($id);
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id){
    $buku = Buku::find($id); // Mencari buku berdasarkan ID
    $buku->judul = $request->judul; // Memperbarui data judul
    $buku->penulis = $request->penulis;
    $buku->harga = $request->harga;
    $buku->tgl_terbit = $request->tgl_terbit;
    $buku->save(); // Menyimpan perubahan data ke database

    return redirect()->route('buku.index')->with('success', 'Data Buku berhasil diupdate!');
}


}
