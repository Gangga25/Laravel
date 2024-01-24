<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Makanan;
use App\Models\Kategori;


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
    public function view_makanan()
    {
        // query builder
        // $makanans = DB::table('makanans')->get();

        // eloquent
        $makanans = Makanan::all();

        // dd($makanans);

        return view('makanan', [
            'foods' => $makanans,
        ]);
    }
    public function test_query_builder()
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
        // DB::table('makanans')->where('id', 9)->update(['nama'=> 'Ikan Bakar']);

        return 'masuk test';
    }

    public function test_eloquent()
    {
        // SELECT DATA 

        // $makanans = Makanan::all();
        // dd($makanans);

        // INSERT DATA CARA 1
        // Makanan::create([
        //     'kode_makanan' => '1',
        //     'nama' => 'Bakso',
        //     'kategori' => 'Hangat',
        //     'harga' => '5000',
        //     'ket' => 'Tersedia',
        // ]);

        // INSERT DATA CARA 2
        // $makanan = new Makanan;
        // $makanan->kode_makanan = '2';
        // $makanan->nama = 'Sate Ayam';
        // $makanan->kategori = 'Bakar';
        // $makanan->harga = 10000;
        // $makanan->ket = 'Tersedia';
        // $makanan->save();

        // HAPUS DATA CARA 1
        // Makanan::find('2')->delete();

        // HAPUS DATA CARA 2
        // $makanan = Makanan::where('kode_makanan', 2);
        // $makanan->delete();

        // UPDATE DATA
        // $makanan = Makanan::find('1');
        // $makanan->nama = 'Bakwan';
        // $makanan->kategori = 'Goreng';
        // $makanan->harga = 1000;
        // $makanan->ket = 'Tersedia';
        // $makanan->save();

        return 'masuk test';
    }
}
