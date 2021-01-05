<!doctype html>
<html lang="en">

<head>
  <title>GKJ SAMIRONOBARU &mdash; Website Template by Colorlib</title>
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

  <style type="text/css">
    .satu {
    font-size: 12px;
    }
    .dua {
    font-size: 20px;
    }
    .tiga {
    font-size: 8px;
    }
 </style>

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
              <a class="nav-link active" href="{{route('dashboard')}}">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('profil')}}">Profil</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{route('ibadah')}}" id="dropdown04" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Ibadah</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="#">Ibadah Online</a>
                <a class="dropdown-item" href="#">IBadah Live Streaming</a>
                <a class="dropdown-item" href="#">Ibadah Keluarga</a>
                <a class="dropdown-item" href="#">PA Wilayah Online</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('portofolio')}}">Dokumentasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}">Kontak</a>
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

  <div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url('images/foto gereja_2.JPG');">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-lg-9 text-center col-sm-12 element-animate">
          <h1 class="mb-4"> VISI: Aku Cinta Gerejaku</h1>
          <div class="btn-play-wrap mx-auto">
            <p class="mb-4"><a href="https://youtu.be/PtytsFGw7ZE" data-fancybox data-ratio="2"
                class="btn-play"><span class="ion ion-ios-play"></span></a></p>
          </div>
          <span>Youtube Channel</span>

        </div>
      </div>
    </div>
  </div>
  

 

   <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 mr-auto mb-5">
          <span class="d-block text-uppercase text-secondary">Pengumuman</span>
          <span class="divider my-4"></span>
          <h2 class="mb-4 section-title"><strong>Informasi Pelaksanaan Ibadah </strong> Selama Pandemi Covid-19</h2>
          <p class="dua"> Majelis GKJ SAMIRONOBARU mengumumkan bahwa selama pandemi Covid-19, pelaksanaan Ibadah Minggu GKJ SAMIRONOBARU dilakukan secara online sampai waktu yang belum ditentukan. </p>
          <p class="dua">Jemaat dapat mengakses Kanal Youtube GKJ SAMIRONOBARU, untuk dapat mengikuti peribadatan setiap minggunya.</p>
          <p><a href="#" class="btn btn-outline-black">Youtube</a></p>
        </div>
        <div class="col-lg-6">
          <figure class="img-dotted-bg">
            <img src="images/gerejapotrait_3.jpg" alt="Image" class="img-fluid">
          </figure>
        </div>
      </div>
    </div>
  </div>


  
  <div class="section portfolio-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h1 class="mb-4 section-title">Dokumentasi Sambar Peduli</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <a href="{{route('portofoliosingle')}}" class="work-thumb">
            <div class="work-text">
              <h2>Pembagian Sembako</h2>
              <p>20 Juli 2020</p>
            </div>
            <img src="images/gambar1_.JPG" alt="Image" class="img-fluid">
          </a>
          <a href="{{route('portofoliosingle')}}" class="work-thumb">
            <div class="work-text">
              <h2>Pengemasan Sembako</h2>
              <p>18 Juli 2020</p>
            </div>
            <img src="images/gambar4.JPG" alt="Image" class="img-fluid">
          </a>
        </div>
        <div class="col-lg-6">
          <a href="{{route('portofoliosingle')}}" class="work-thumb">
            <div class="work-text">
              <h2>Pengemasan Sembako</h2>
              <p>19 Juli 2020</p>
            </div>
            <img src="images/gambar2.JPG" alt="Image" class="img-fluid">
          </a>
          <a href="{{route('portofoliosingle')}}" class="work-thumb">
            <div class="work-text">
              <h2>Distribusi Sembako</h2>
              <p>20 Juli 2020</p>
            </div>
            <img src="images/gambar3.JPG" alt="Image" class="img-fluid">
          </a>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-12 text-center">
          <p><a href="{{route('portofolio')}}" class="btn btn-outline-white px-4 py-3">Lainnya</a></p>
        </div>
      </div>
    </div>
  </div>


  

  <div class="section bg-light block-11">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-8 text-center">
          <h2 class="text-Black mb-8 font-weight-bold">Jadwal Ibadah Daring Hari Minggu</h2>
        </div>
      </div>
      <div class="nonloop-block-11 owl-carousel">
        <div class="item">
          <div class="block-33 h-100">
            <div class="vcard d-flex mb-3">
              <div class="image align-self-center"><img src="images/keluarga_cok.jpg" alt="Person here"></div>
              <div class="name-text align-self-center">
            
                <h2 class="heading">Ibadah Keluarga</h2>
                <span class="meta">Minggu ke-1 dan 2</span>
              </div>
            </div>
            <div class="text">
              <blockquote>
                <p> Ibadah dilaksanakan secara mandiri bersama dengan keluarga di rumah masing-masing. Liturgi dibagikan di Whatsapp Group Wilayah.</p>
              </blockquote>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-33 h-100">
            <div class="vcard d-flex mb-3">
              <div class="image align-self-center"><img src="images/online_cok.jpg" alt="Person here"></div>
              <div class="name-text align-self-center">
                <h2 class="heading dua">Ibadah Online</h2>
                <span class="meta ">Minggu ke-3</span>
              </div>
            </div>
            <div class="text">
              <blockquote>
                <p>Ibadah dilaksanakan secara online, melalui kanal youtube GKJ Samironobaru. Ibadah dapat diakses pada pukul <STRONG>09.00 WIB</STRONG></p>
              </blockquote>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-33 h-100">
            <div class="vcard d-flex mb-3">
              <div class="image align-self-center"><img src="images/streaming_cok.jpg" alt="Person here"></div>
              <div class="name-text align-self-center">
                <h2 class="heading dua">Ibadah Live Streaming</h2>
                <span class="meta">Minggu ke-4</span>
              </div>
            </div>
            <div class="text">
              <blockquote>
                <p>Ibadah dilaksanakan secara live streaming, melalui kanal youtube GKJ Samironobaru. Ibadah dimulai pada pukul <strong>09.00 wib</strong></p>
              </blockquote>
            </div>
          </div>
        </div>
        

      </div>
    </div>
  </div>
  <!-- END .block-4 -->
  </div>

  <div class="bg-info py-5">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <h2 class="text-white mb-4 font-weight-bold">Persembahan</h2>
          <p class="text-white mb-5 dua" >Persembahan dapat dihaturkan pada kotak yang telah disediakan di Kantor gereja, atau persembahan bisa dikumpulkan terlebih dahulu dirumah 
            masing-masing dan dapat dikumpulkan saat ibadah kembali normal.
          </p>
            
          <p class="mb-0"><a href="{{route('contact')}}" class="btn btn-outline-white px-4 py-3">Hubungi</a></p>
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