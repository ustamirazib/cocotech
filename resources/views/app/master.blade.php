<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tugas web gdn 2020">

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Public+Sans&display=swap" rel="stylesheet">
    <title>Coco Tech</title>
  </head>
  <body>
  
<header id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/coco-new.png') }}" width="100">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ Route('kategori') }}">Gadget</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Smartphone
                </a>
                <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="kategori/smartphone?carismartphone=samsung">Samsung</a>
                    <a class="dropdown-item" href="kategori/smartphone?carismartphone=xiaomi">Xiaomi</a>
                    <a class="dropdown-item" href="#">Asus</a>
                    <a class="dropdown-item" href="#">Iphone</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ Route('kategori_smartphone') }}">Semua smartphone</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Laptop
                </a>
                <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="kategori/laptop?cari=asus">Asus</a>
                    <a class="dropdown-item" href="kategori/laptop?cari=acer">Acer</a>
                    <a class="dropdown-item" href="kategori/laptop?cari=dell">Dell</a>
                    <a class="dropdown-item" href="kategori/laptop?cari=msi">MSI</a>
                    <a class="dropdown-item" href="kategori/laptop?cari=lenovo">LENOVO</a>
                    <a class="dropdown-item" href="kategori/laptop?cari=hp">HP</a>
                    <a class="dropdown-item" href="kategori/laptop?cari=toshiba">TOSHIBA</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ Route('kategori_laptop') }}">Semua Laptop</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ Route('about.page') }}">Tentang</a>
            </li>
            </ul>
        </div>
      </div>
    </nav>
</header>

<!-- awal pembukaan-->

<section id="coco-banner">
  <div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3 class="intro">Mau membeli gadget terbaru? Cek dulu disini spesifikasinya</h3>
            <p class="intro">sebelum membeli gadget, situs ini akan membantu anda untuk melihat spek smartphone kekinian</p>
            <a href="{{ Route('kategori') }}"><button class="btn btn-outline-primary btn-lg">Cari ?</button></a>
        </div>
    </div>
    </div>
    <img src="{{ asset('img/coco-wave.svg') }}" alt="coco-wave" class="coco-wave">
</section>


<!--akhir pembukaan-->

<!---------------------info-------------------->
<section id="coco-info">
    <div class="container text-center">
        <h1 class="coco-title">Info coco</h1>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/coco-robot.png') }}" alt="coco-robot" class="coco-robot" width="150">
            </div>
            <div class="col-md-4">
                <h4>Teknologi tidak akan ada habisnya</h4>
                <p>dari tahun ke tahun perkembangan teknologi begitu cepat, hampir setiap orang mempunyai sebuah barang elektronik, tak lepas dari gadget</p>
            </div>
            <div class="col-md-4">
                <h4>Pilih brand atau merek</h4>
                <p>Setiap merk memiliki sebuah kualitas yang berbeda beda maka dari itu kita harus memilih merk yg berkualitas dan harga terjangkau</p>
            </div>
        </div>
    </div>
</section>
<hr>
<!----------------social media----------------->
<section id="coco-sosial">
        <div class="jumbotron">
            <div class="container">
             <div class="row">
                <div class="col-md-6">
                    <h1 class="display-4 text-white">Follow kami di</h1>
                    </div>
                </div>
                <div class="col-md-6">
                     <a href=""><img src="{{ asset('img/coco-fb.png') }}" alt="coco-facebook" width="40" class="coco-sosial"></a>
                    <a href=""><img src="{{ asset('img/coco-inst.png') }}" alt="coco-inst" width="40" class="coco-sosial"></a>
                <div>
                </div>
         </div>
</section>

<!------------------info ke 2--------------->
<section id="coco-info">
    <div class="container text-center">
        <h1 class="coco-title">Tips</h1>
        <div class="row">
            <div class="col-md-4">
                <h4>PIlih barang kelas menengah</h4>
                <p>Maksud dari smartphone kelas menengah ke atas adalah smartphone yang harganya tidak terlalu murah, tetapi juga masih bisa terjangkau oleh orang-orang dengan budget lebih. Kisaran harga dimulai dari angka Rp 2 juta sampai Rp 3 jutaan</p>
            </div>
            <div class="col-md-4">
            <h4>Pilih brand atau merek</h4>
                <p>Setiap merk memiliki sebuah kualitas yang berbeda beda maka dari itu kita harus memilih merk yg berkualitas dan harga terjangkau</p>
            </div>
            <div class="col-md-4">
                <h4>Tentukan RAM</h4>
                <p>Setiap merk elektronik memiliki ukuran RAM yg berbeda beda karna dijaman sekarang, ini hampir semua aplikasi membutuhkan penyimpanan yg mencukupi, minimal 2GB sampai 4GB</p>
            </div>
        </div>
    </div>
</section>
<hr>

<!--------------footer-------------->

<section id="coco-footer">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h4>Alamat</h4>
                <p class="lead">Bandung - <br> Indonesia, <br> Cicalengka</p>
            </div>
            <div class="col-md">
               <h4>Saran ?</h4> 
            <form action="/user/saran" method="POST">
            {{ csrf_field() }}
                <textarea name="saran" class="form-control" cols="30" rows="3" placeholder="Mungkin kami membutuhkan saran"></textarea>
                <br>
                <button class="btn btn-primary" type="submit">Kirim!</button>
            </form>
            </div>
            <div class="col-md">
                <h4>Hub:</h4>
                <p>cocobdg@gmail.com</p>
                <a href="{{ Route('login') }}" class="btn btn-sm btn-outline-primary">Admin?</a>
            </div>
        </div>
    </div>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('js/paralax.js') }}"></script>
  </body>
</html>