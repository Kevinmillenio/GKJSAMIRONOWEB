<!doctype html>
<html lang="en">

<head>
  <title>Craft &mdash; Website Template by Colorlib</title>
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
              <a class="nav-link active" href="{{route('profil')}}">Profil</a>
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

  <div class="inner-page">
    <div class="slider-item overlay" style="background-image: url('images/foto gereja_8.jpg');"
      data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-lg-9 text-center col-sm-12 element-animate">
            <h1 class="mb-4">Dokumentasi </h1>
            <p class="custom-breadcrumbs"><a href="index.html">Beranda</a> <span class="mx-3">/</span> Dokumentasi</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section portfolio-section">
    <div class="container">

 

      <div class="row">
        <div class="col-lg-6">
          <a href="{{route('portofoliosingle')}}" class="work-thumb">
            <div class="work-text">
              <h2>Distribusi Sembako</h2>
              <p>20 Juli 2020</p>
            </div>
            <img src="images/gambar9.jpg" alt="Image" class="img-fluid">
          </a>
          <a href="{{route('portofoliosingle')}}" class="work-thumb">
            <div class="work-text">
              <h2>Distribusi Sembako</h2>
              <p>17 Juli 2020</p>
            </div>
            <img src="images/gambar6_.jpg" alt="Image" class="img-fluid">
          </a>
        </div>
        <div class="col-lg-6">
          <a href="{{route('portofoliosingle')}}" class="work-thumb">
            <div class="work-text">
              <h2>Distribusi Sembako</h2>
              <p>19 Juli 2020</p>
            </div>
            <img src="images/gambar10.jpg" alt="Image" class="img-fluid">
          </a>
          <a href="{{route('portofoliosingle')}}" class="work-thumb">
            <div class="work-text">
              <h2>Distribusi Sembako</h2>
              <p>18 Juli 2020</p>
            </div>
            <img src="images/gambar11.jpg" alt="Image" class="img-fluid">
          </a>
        </div>

        <div class="col-lg-6">
          <a href="{{route('portofoliosingle')}}" class="work-thumb">
            <div class="work-text">
              <h2>Distribusi Sembako</h2>
              <p>20 Juli 2020</p>
            </div>
            <img src="images/gambar12.jpg" alt="Image" class="img-fluid">
          </a>
          <a href="{{route('portofoliosingle')}}" class="work-thumb">
            <div class="work-text">
              <h2>Distribusi Sembako</h2>
              <p>18 Juli 2020</p>
            </div>
            <img src="images/gambar14.jpg" alt="Image" class="img-fluid">
          </a>
        </div>
        <div class="col-lg-6">
          <a href="{{route('portofoliosingle')}}" class="work-thumb">
            <div class="work-text">
              <h2>Distribusi Sembako</h2>
              <p>17 Juli 2020</p>
            </div>
            <img src="images/gambar8_.jpg" alt="Image" class="img-fluid">
          </a>
          <a href="{{route('portofoliosingle')}}" class="work-thumb">
            <div class="work-text">
              <h2>Distribusi Sembako</h2>
              <p>21 Juli 2020</p>
            </div>
            <img src="images/gambar13.jpg" alt="Image" class="img-fluid">
          </a>
        </div>
      </div>
      
    </div>
  </div>
<!--
  <div class="section bg-light block-11">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title">Testimonial</h2>
        </div>
      </div>
      <div class="nonloop-block-11 owl-carousel">
        <div class="item">
          <div class="block-33 h-100">
            <div class="vcard d-flex mb-3">
              <div class="image align-self-center"><img src="images/person_1.jpg" alt="Person here"></div>
              <div class="name-text align-self-center">
                <h2 class="heading">John Smith</h2>
                <span class="meta">XYZ Inc. Client</span>
              </div>
            </div>
            <div class="text">
              <blockquote>
                <p>&rdquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat qui, ipsum debitis id
                  reprehenderit ut soluta possimus consectetur asperiores totam veniam quasi molestiae. Animi doloribus
                  accusamus eius ex laudantium vitae? &ldquo;</p>
              </blockquote>
            </div>
          </div>
        </div>
  
        <div class="item">
          <div class="block-33 h-100">
            <div class="vcard d-flex mb-3">
              <div class="image align-self-center"><img src="images/person_2.jpg" alt="Person here"></div>
              <div class="name-text align-self-center">
                <h2 class="heading">Joshua Darren</h2>
                <span class="meta">XYZ Inc. Client</span>
              </div>
            </div>
            <div class="text">
              <blockquote>
                <p>&rdquo; Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, ut enim error molestias maxime
                  deserunt voluptate doloribus nihil nesciunt id perferendis, doloremque earum architecto ab incidunt
                  sunt
                  corrupti. Consequuntur qui ullam voluptates sapiente quod esse eum. &ldquo;</p>
              </blockquote>
            </div>
          </div>
        </div>
  
        <div class="item">
          <div class="block-33 h-100">
            <div class="vcard d-flex mb-3">
              <div class="image align-self-center"><img src="images/person_1.jpg" alt="Person here"></div>
              <div class="name-text align-self-center">
                <h2 class="heading">John Smith</h2>
                <span class="meta">XYZ Inc. Client</span>
              </div>
            </div>
            <div class="text">
              <blockquote>
                <p>&rdquo; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ab? Asperiores dolore
                  blanditiis quis sapiente soluta aliquid officiis. &ldquo;</p>
              </blockquote>
            </div>
          </div>
        </div>
  
        <div class="item">
          <div class="block-33 h-100">
            <div class="vcard d-flex mb-3">
              <div class="image align-self-center"><img src="images/person_2.jpg" alt="Person here"></div>
              <div class="name-text align-self-center">
                <h2 class="heading">John Smith</h2>
                <span class="meta">XYZ Inc. Client</span>
              </div>
            </div>
            <div class="text">
              <blockquote>
                <p>&rdquo; Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, accusamus? Porro fugit culpa
                  consequuntur dolorum. &ldquo;</p>
              </blockquote>
            </div>
          </div>
        </div>
  
      </div>
    </div>
  </div> -->
  <!-- END .block-4 -->
  </div>



  <div class="bg-info py-5">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <h2 class="text-white mb-4 font-weight-bold">Persembahan Sambar Peduli</h2>
          <p class="text-white mb-5 dua" >Bagi jemaat yang ingin berpersembahan untuk kegiatan Sambar Peduli, dapat menghubungi kontak yang tersedia atau 
            bisa langsung mendaftar di kantor gereja.
          </p>
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
                <span class="d-block">Email:</span><span class="text-white">gkjsamironobaru@gmail.com</span>
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