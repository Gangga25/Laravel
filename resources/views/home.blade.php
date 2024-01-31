@extends('template.index')

@section('tittle', 'Home')

@section('content')

<div class="container my-4">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Selamat Datang Disini</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="/minuman.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">DRINK</h5>
                        <p class="card-text">Segar seperti sudah mandi.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="/cake.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">CAKE</h5>
                        <p class="card-text">Cake manis seperti janjimu.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="/makanan.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">FOODS</h5>
                        <p class="card-text">Makan supaya hidup.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection