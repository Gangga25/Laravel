@extends('template')

@section('judul', 'Home')

@section('content')
    <form action="/save" method="post">
       @csrf
       <div>
        <label for="nama">Nama</label>
        <input type="text" name="nama">
       </div>

       <div>
        <label for="kategori">Kategori</label>
        <input type="text" name="kategori">
       </div>

       <div>
        <label for="harga">Harga</label>
        <input type="number" name="harga">
       </div>

       <div>
        <label for="ket">Keterangan</label>
        <input type="text" name="ket">
       </div>

       <button type="submit">Simpan</button>

    
@endsection