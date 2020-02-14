@extends('app.nav')

@section('content')
<div class="container text-center">
    <div class="card" style="width: 18rem;">
    <img src="{{ asset('img/coco-kategori-label.png') }}" alt="Label 2020" width="100">
        <img src="{{ asset('img/coco-type-laptop.png') }}" class="card-img-top" alt="Kategori-laptop">
        <div class="card-body">
            <h5 class="card-title">Laptop & Accesoris</h5>
            <a href="{{ Route('kategori_laptop') }}" class="btn btn-outline-primary">Cari laptop?</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
    <img src="{{ asset('img/coco-kategori-label.png') }}" alt="Label 2020" width="100">
        <img src="{{ asset('img/coco-type-phone.png') }}" class="card-img-top" alt="Kategori-smartphone">
        <div class="card-body">
            <h5 class="card-title">Smartphone</h5>
            <a href="{{ Route('kategori_smartphone') }}" class="btn btn-outline-primary">Cari smartphone?</a>
        </div>
    </div>
</div>


@stop