@extends('app.nav')

@section('title', 'Laptop')

@section('content')

@include('partial._slider');

@include('partial._search');

<hr>


<div class="container">
        <div class="row">
        @if(count($data_laptop) > 0)
           @foreach($data_laptop as $dataLaptop)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ $dataLaptop->getGambarBarang() }}" class="card-img-top fixed-laptop" alt="Laptop image">
                    <div class="card-body">
                        <h5 class="card-title judul">{{ $dataLaptop->namaLaptop }}</h5>
                        <p class="card-text m-1"><span class="badge badge-primary">{{ $dataLaptop->tagsBarang }}</span></p>
                        <p>{{ $dataLaptop->hargaBarang }}</p>
                        <a href="/laptop/{{$dataLaptop->id}}/detail" class="btn btn-outline-warning">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        @else
        <h5>Data tidak tersedia / belum di update</h5>
        @endif
        </div>
</div><!--container div-->
@stop