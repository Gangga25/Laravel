<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('home1');
    }
    public function about()
    {
        return view('about1');
    }
    public function tambah()
    {
        return view('input');
    }
    public function simpan(Request $request)
    {
        $name = $request->input('nama');
        $kategori = $request->input('kategori');
        $harga = $request->input('harga');
        $ket = $request->input('ket');

        return view('result', [
            'nama' => $name, 
            'kategori' => $kategori,
            'harga' => $harga,
            'ket' => $ket,
        ]);
    }
    public function test()
    {
        // Query builder untuk insert 1 data ke dalam table makanans
        // DB::table('makanans')->insert([
        // 'nama' => 'GG',
        // 'kategori' => 'Lucu',
        // 'harga' => '2',
        // 'ket' => 'Hidup',
        // ]);

        // Query builder untuk insert banyak data ke dalam table makanans
        // DB::table('makanans')->insert([
            // [
            //     'nama' => 'Nasi Goreng',
            //     'kategori' => 'Makanan',
            //     'harga' => '10000',
            //     'ket' => 'Tersedia',
            // ],
            // [
            //     'nama' => 'Ayam Bakar',
            //     'kategori' => 'Makanan',
            //     'harga' => '10000',
            //     'ket' => 'Tersedia',
            // ],
            // [
            //     'nama' => 'Sate Ayam',
            //     'kategori' => 'Makanan',
            //     'harga' => '15000',
            //     'ket' => 'Tersedia',
            // ],
        //     [
        //         'nama' => 'Bakso Kikil',
        //         'kategori' => 'Makanan',
        //         'harga' => '10000',
        //         'ket' => 'Tersedia',
        //     ],
        // ]);

        // Query untuk SELECT data dari table makanans
        // $result = DB::table('makanans')->where('id', 1)->get();
        // dd($result);

        // Query untuk delate data dari table makanans
        // DB::table('makanans')->where('id', 1)->delete();

        // Query untuk update data dari table makanans
        DB::table('makanans')->where('id', 9)->update(['nama'=> 'Ikan Bakar']);

        return 'masuk test';
    }
}
