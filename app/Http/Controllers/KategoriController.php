<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Use Query Builder
use Illuminate\Support\Facades;

// Use Eloquent
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index ()
    {
        $kategori = Kategori::all();

        return view('kategori', [
            'data' => $kategori,
        ]);
    }
    public function add()
    {
        return view('form_kategori');
    }
    public function edit($id)
    {
        $kategori = Kategori::find($id);

        return view('form_kategori', [
            'data' => $kategori,
        ]);
    }
    public function save(Request $req)
    {
        $old_kode = @$req->old_kode;
       

        if ($old_kode) {
            Kategori::where('kode_kategori', $old_kode)->update([
                'kode_kategori' => $req->kode,
                'nama' => $req->nama,
                'ket' => $req->ket,
            ]);
        } else {
            Kategori::create([
                'kode_kategori' => $req->kode,
                'nama' => $req->nama,
                'ket' => $req->ket,
            ]);
        }
        return redirect('/kategori');
    }
    public function delete($id)
    {
        Kategori::find($id)->delete();

        return redirect('/kategori');
    }
}
