<!doctype html>
<html lang="en">

<head>
  <title>GKJ SAMIRONOBARU &mdash; </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">


  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <header role="banner">
    <nav class="navbar navbar-expand-lg  bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand " href="{{route('dashboard')}}">GKJ SAMIRONOBARU</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
          aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarsExample05">
          <ul class="navbar-nav pl-md-5 ml-auto">
            <li class="nav-item">
              <a class="nav-link " href="{{route('dashboard')}}">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{route('profil')}}">Profil</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="{{route('ibadah')}}" id="dropdown04" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Ibadah</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="#">Ibadah Online</a>
                <a class="dropdown-item" href="#">IBadah Live Streaming</a>
                <a class="dropdown-item" href="#">Ibadah Keluarga</a>
                <a class="dropdown-item" href="#">PA Wilayah Online</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{route('portofolio')}}">Dokumentasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{route('contact')}}">Kontak Kami</a>
            </li>
          </ul>

          <div class="navbar-nav ml-auto">
            <form method="post" class="search-form">
              <span class="icon ion ion-search"></span>
              <input type="text" class="form-control" placeholder="Search...">
            </form>
          </div>

        </div>
      </div>
    </nav>
  </header>
  <!-- END header -->

  <div class="inner-page">
    <div class="slider-item overlay" style="background-image: url('images/foto gereja_4.JPG');"
      data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-lg-9 text-center col-sm-12 element-animate">
            <h1 class="mb-4">Kontak Kami</h1>
            <p class="custom-breadcrumbs"><a href="index.html">Beranda</a> <span class="mx-3">/</span> Kontak Kami</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-5 order-2">
          <form action={{route('send_message')}} method="post">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="name">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control ">
              </div>
              <div class="col-md-6 form-group">
                <label for="phone">Telepon</label>
                <input type="text" id="telepon" name="telepon" class="form-control ">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
  
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control ">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="message">Tulis Pesan</label>
                <textarea  id="pesan" name="pesan" class="form-control " cols="30" rows="8"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="submit" value="Kirim" class="btn btn-primary px-3 py-3">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6 order-2 mb-5">
          <div class="row justify-content-right">
            <div class="col-md-10 mx-auto contact-form-contact-info">
              <p class="d-flex">
                <span class="ion-ios-location icon mr-5"></span>
                <span>Jl. Kepuh GK III No.905, Samirono, Klitren, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55222</span>
              </p>
  
              <p class="d-flex">
                <span class="ion-ios-telephone icon mr-5"></span>
                <span>(0274) 562477</span>
              </p>
  
              <p class="d-flex">
                <span class="ion-android-mail icon mr-5"></span>
                <span>gkjsamironobaru@ymail.com</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="site-footer" role="contentinfo">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-4 mb-5">
          <h3 class="mb-4">GKJ SAMIRONOBARU</h3>
          <p class="mb-5">Gereja Kristen Jawa Samironobaru menjadi gereja yang memiliki misi untuk Menjadikan Keluarga Sebagai Pusat Pembentukan Karakter.</p>
          <ul class="list-unstyled footer-link d-flex footer-social">
            <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
          </ul>

        </div>
        <div class="col-md-5 mb-5 pl-md-5">
          <div class="mb-5">
            <h3 class="mb-4">Kontak</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block">
                <span class="d-block">Alamat:</span>
                <span class="text-white">Jl. Kepuh GK III No.905, Samirono, Klitren, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55222</span>
              </li>
              <li class="d-block">
                <span class="d-block">Telepon:</span><span class="text-white">(0274) 562477</span>
              </li>
              <li class="d-block">
                <span class="d-block">Email:</span><span class="text-white">gkjsamironobaru@ymail.com</span>
              </li>
            </ul>
          </div>

          
        </div>
        <div class="col-md-3 mb-5">
          <h3 class="mb-4">Quick Links</h3>
          <ul class="list-unstyled footer-link">
            <li><a href="#">About</a></li>
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Disclaimers</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-3">

        </div>
      </div>
      <div class="row">
        <div class="col-12 text-md-center text-left">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All Rights Reserved | GKJ SAMIRONOBARU
            <i class="fa fa-heart text-danger" aria-hidden="true"></i>  <a href="https://colorlib.com"
              target="_blank"></a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- END footer -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#f4b214" /></svg></div>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>