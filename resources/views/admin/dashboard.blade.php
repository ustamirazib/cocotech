<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Halaman Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/base/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <!-- End plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="/dashboard"><img src="{{ asset('img/coco-new.png') }}" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="/dashboard"><img src="{{ asset('img/coco-new.png') }}" alt="logo" /></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search"
                aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
              id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-text mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Admin
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown"
              id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name">{{ auth()->user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a href="/logout" class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">Halaman saat ini</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a href="{{ Route('kategori_laptop') }}" class="nav-link" href="pages/samples/login.html">laptop</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ Route('kategori_smartphone') }}">Smartphone</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ Route('kotak_saran') }}"> Kotak saran</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <h2>Selamat Datang {{ Auth::user()->name }}</h2>
                      <p class="mb-md-0">Ini halaman admin, anda dapat mengubah semuanya</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 grid-margin">
            </div>
            <div class="col-md-12 grid-margin">
                            <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
             Buat Postingan <i class="mdi mdi-message-plus"></i>
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Buat Postingan laptop</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="/post/laptop" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="form-group">
                          <label for="name-laptop">Nama Laptop</label>
                          <input type="text" name="namaLaptop" class="form-control" id="name-laptop" placeholder="Masukan nama laptop">
                        </div>
                        <div class="form-group">
                          <label for="img-laptop">Pilih gambar Laptop</label>
                          <input type="file" name="gambarBarang" class="form-control-file" class="gambarLaptop" id="img-laptop">
                        </div>
                        <div class="form-group">
                          <label for="spec">spesifikasi</label>
                          <textarea name="spesifikasiBarang" class="form-control" id="spec" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="tag">tags</label>
                          <input type="text" name="tagsBarang" class="form-control" id="tag" placeholder="tag">
                        </div>
                        <div class="form-group">
                          <label for="garansi">Garansi</label>
                          <input type="text" name="garansiBarang" class="form-control" id="garansi" placeholder="Masukan garansi">
                        </div>
                        <div class="form-group">
                          <label for="harga">Masukan harga</label>
                          <input type="text" name="hargaBarang" class="form-control" id="harga" value="Rp: " placeholder="Masukan harga barang">
                        </div>
                        <div class="form-group">
                          <label for="author">Nama pembuat</label>
                          <input type="text" name="pembuatPost" class="form-control" id="author" placeholder="Masukan pembuat postingan">
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Buat postingan</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="content kartu">
              <h4>Postingan Laptop</h4>
              <hr>
              <div class="row">
              @foreach($data_laptop as $dataLaptop)
                <div class="col-md-3">
                  <div class="card">
                      <img src="{{ $dataLaptop->getGambarBarang() }}" class="card-img-top" alt="Gambar laptop">
                      <div class="card-body">
                          <h5 class="card-title">{{ $dataLaptop->namaLaptop}}</h5>
                          <p class="card-text m-1"><span class="badge badge-primary">{{ $dataLaptop->tagsBarang }}</span></p>
                          <a href="" class="btn btn-outline-warning">Detail</a>
                          <a href="/laptop/{{$dataLaptop->id}}/delete" class="btn btn-outline-danger">Delete</a>
                      </div>
                     </div>
                  </div>
                @endforeach
                  <!--card untuk nanti-->
                  
              </div>
          </div>


         <h4 class="mt-5">Postingan Smartphone</h4>
        <div class="content kartu">
          <button type="button" class="btn btn-primary" data-toggle="modal"   data-target="#coco-modal-smartphone">
            Buat postingan Smartphone
          </button>
              <hr>
              <div class="row">
              @foreach($data_smartphone as $dataSmartphone)
              <div class="col-md-3">
                <div class="card">
                    <img src="{{ $dataSmartphone->getGambarBarang() }}" class="card-img-top" alt="Smartphone">
                    <div class="card-body">
                        <h5 class="card-title judul m-1">{{ $dataSmartphone->namaSmartphone }}</h5>
                        <p class="card-text m-1"><span class="badge badge-primary">{{ $dataSmartphone->tagsBarang }}</span></p>
                        <a href="#" class="btn btn-outline-warning">Detail</a>
                        <a href="/smartphone/{{$dataSmartphone->id}}/delete" class="btn btn-outline-danger">Delete</a>
                    </div>
                </div>
            </div>
                @endforeach
                  <!--card untuk nanti-->
                  
              </div>
          </div>

          <!-- Modal -->
        <div class="modal fade" id="coco-modal-smartphone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buat postingan smarphone</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <form action="/post/smartphone" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="form-group">
                          <label for="name-smartphone">Nama Smartphone</label>
                          <input type="text" name="namaSmartphone" class="form-control" id="name-smartphone" placeholder="Masukan nama smartphones">
                        </div>
                        <div class="form-group">
                          <label for="img-smartphone">Pilih gambar smartphone</label>
                          <input type="file" name="gambarBarang" class="form-control-file" id="img-smartphone">
                        </div>
                        <div class="form-group">
                          <label for="spec">spesifikasi</label>
                          <textarea name="spesifikasiBarang" class="form-control" id="spec" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="tag">tags</label>
                          <input type="text" name="tagsBarang" class="form-control" id="tag" placeholder="tag">
                        </div>
                        <div class="form-group">
                          <label for="garansi">Garansi</label>
                          <input type="text" name="garansiBarang" class="form-control" id="garansi" placeholder="Masukan garansi">
                        </div>
                        <div class="form-group">
                          <label for="harga">Masukan harga</label>
                          <input type="text" name="hargaBarang" class="form-control" id="harga" value="Rp: " placeholder="Masukan harga barang">
                        </div>
                        <div class="form-group">
                          <label for="author">Nama pembuat</label>
                          <input type="text" name="pembuatPost" class="form-control" id="author" placeholder="Masukan pembuat postingan">
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Buat postingan</button>
                    </div>
                    </form>
              </div>
            </div>
          </div>
        </div>


          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020-2021 <a
                  href="https://www.cocotech.com/" target="_blank">cocotech</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                  class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('vendors/base/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/data-table.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.js') }}"></script>
    <!-- End custom js for this page-->
</body>

</html>