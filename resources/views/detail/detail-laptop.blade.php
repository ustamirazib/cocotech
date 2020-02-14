@extends('app.nav')

@section('content')

<div class="container">

    <div class="card">
      <div class="row">
      <aside class="col-sm-5 border-right">
  <article class="gallery-wrap"> 
        <div class="img-big-wrap">
          <div>
            <img src="{{ $data_laptop->getGambarBarang() }}" class="coco-produk-image">
          </div>
        </div>
  </article>
      </aside>
      <aside class="col-sm-7">
  <article class="card-body p-5">
    <h3 class="title mt-4">{{ $data_laptop->namaLaptop }}</h3>

  <p class="price-detail-wrap"> 
    <span class="price h3 text-warning"> 
      <span class="currency"></span><span class="num">{{ $data_laptop->hargaBarang }}</span>
    </span> 
    <span>/per unit</span> 
  </p> <!-- price-detail-wrap .// -->
  <dl class="item-property">
    <h5>Spesifikasi Barang</h5>
    <dd><p>{{ $data_laptop->spesifikasiBarang }}</p></dd>
  </dl>
  <dl class="item-property">
  <div class="row">
      <div class="col">
        <p class="lead"><b>TAGS :</b></p>
        <p class="card-text m-1"><span class="badge badge-primary">{{ $data_laptop->tagsBarang }}</span></p>
        </div>
      <div class="col">
        <p class="lead"><b>Garansi:</b></p>
        <p class="card-text m-1">{{ $data_laptop->garansiBarang }}</p>
      </div>
    </div>
  </dl>
    
    <a href="{{ Route('kategori_laptop') }}"><button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</button></a>
  </article> <!-- card-body.// -->
      </aside> <!-- col.// -->
    </div> <!-- row.// -->
  </div> <!-- card.// -->

  <footer class="blockquote-footer"><strong>Dibuat oleh:</strong> <cite title="Source Title">{{ $data_laptop->pembuatPost }}</cite></footer>
</div>
<!--container.//-->

@stop