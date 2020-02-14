@extends('app.nav')

@section('title', 'Smartphone')

@section('content')

@include('partial._slider')

@include('partial._searchSmartphone')

<hr>

<div class="container">
        <div class="row">
        @if(count($data_smartphone) > 0)
           @foreach($data_smartphone as $dataSmartphone)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ $dataSmartphone->getGambarBarang() }}" class="card-img-top" alt="Smartphone">
                    <div class="card-body">
                        <h5 class="card-title judul m-1">{{ $dataSmartphone->namaSmartphone }}</h5>
                        <p class="card-text m-1"><span class="badge badge-primary">{{ $dataSmartphone->tagsBarang }}</span></p>
                        <a href="/smartphone/{{$dataSmartphone->id}}/detail" class="btn btn-outline-warning">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else 
        <h5>Data tidak tersedia / belum di update</h5>
        @endif
</div>

@stop