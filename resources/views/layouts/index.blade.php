<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>E-Commerce - MDBootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{asset('style/css/bootstrap.min.css')}}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{asset('style/css/mdb.min.css')}}">
  <link rel="stylesheet" href="{{asset('style/css/modules/animations-extended.min.css')}}">

  <style type="text/css">
    .multiple-select-dropdown li [type=checkbox]+label {
      height: 1rem;
    }

  </style>

</head>
<!-- Navigation -->
<header>

<!-- Sidebar navigation -->
<ul id="slide-out" class="side-nav custom-scrollbar sn-bg-4">

  <!-- Logo -->
  <li>
    <div class="logo-wrapper waves-light">
      <a href="#"><img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="img-fluid flex-center"></a>
    </div>
  </li>
  <!-- Logo -->

  <!-- Social -->
  <li>
    <ul class="social">
      <li><a class="fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
      <li><a class="pin-ic"><i class="fab fa-pinterest"> </i></a></li>
      <li><a class="gplus-ic"><i class="fab fa-google-plus-g"> </i></a></li>
      <li><a class="tw-ic"><i class="fab fa-twitter"> </i></a></li>
    </ul>
  </li>
  <!-- Social -->

  <!-- Search Form -->
  <li>
    <form class="search-form" role="search">
      <div class="form-group md-form mt-0 pt-1 waves-light">
        <input type="text" class="form-control" placeholder="Search">
      </div>
    </form>
  </li>
  <!-- Search Form -->

  <!-- Side navigation links -->
  <li>
    <ul class="collapsible collapsible-accordion">
      <li>

        <a class="collapsible-header waves-effect arrow-r"><i class="fas fa-shopping-cart"></i> Cart page<i
            class="fas fa-angle-down rotate-icon"></i>
        </a>

        <div class="collapsible-body">
          <ul>
            <li><a href="../cart/cart-v1.html" class="waves-effect">Cart V.1</a>
            </li>
            <li><a href="../cart/cart-v2.html" class="waves-effect">Cart V.2</a>
            </li>
          </ul>
        </div>
      </li>

      <li>
        <a class="collapsible-header waves-effect arrow-r"><i class="far fa-hand-pointer"></i> Category page<i
            class="fas fa-angle-down rotate-icon"></i>
        </a>

        <div class="collapsible-body">
          <ul>
            <li><a href="../category/category-v1.html" class="waves-effect">Category V.1</a>
            </li>
            <li><a href="../category/category-v2.html" class="waves-effect">Category V.2</a>
            </li>
            <li><a href="../category/category-v3.html" class="waves-effect">Category V.3</a>
            </li>
            <li><a href="../category/category-v4.html" class="waves-effect">Category V.4</a>
            </li>
          </ul>
        </div>

      </li>

      <li>
        <a class="collapsible-header waves-effect arrow-r"><i class="far fa-bookmark"></i> Homepage<i
            class="fas fa-angle-down rotate-icon"></i>
        </a>

        <div class="collapsible-body">
          <ul>
            <li><a href="../homepage/homepage-v1.html" class="waves-effect">Homepage V.1</a>
            </li>
            <li><a href="../homepage/homepage-v2.html" class="waves-effect">Homepage V.2</a>
            </li>
            <li><a href="../homepage/homepage-v3.html" class="waves-effect">Homepage V.3</a>
            </li>
          </ul>
        </div>

      </li>

      <li>
        <a class="collapsible-header waves-effect arrow-r"><i class="fas fa-camera-retro"></i> Product page<i
            class="fas fa-angle-down rotate-icon"></i>
        </a>

        <div class="collapsible-body">
          <ul>
            <li><a href="../product/product-v1.html" class="waves-effect">Product V.1</a>
            </li>
            <li><a href="../product/product-v2.html" class="waves-effect">Product V.2</a>
            </li>
          </ul>
        </div>
      </li>
      <li>

        <a href="../contact/contact.html" class="collapsible-header waves-effect"><i class="fas fa-envelope"></i>
          Contact</a>
      </li>

    </ul>

  </li>
 <!-- Authentication Links -->

                     

  <!-- Side navigation links -->
  <div class="sidenav-bg mask-strong"></div>

</ul>
<!-- Sidebar navigation -->

<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar white">

  <div class="container">

    <!-- SideNav slide-out button -->


    <a class="navbar-brand font-weight-bold" href="#"><strong>I</strong>buy</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
      aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">

      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
        <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="{{route('hello')}}"><i
              class="fas fa-home  blue-text"></i> Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="{{route('allpanier')}}"><i class="fas fa-shopping-cart ml-3"> </i>  <span class="sr-only">(current)</span></a>
        </li>
        @if(Auth::guest())
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold"
           href="{{route('login')}}"><i 
          class="fas fa-unlock-alt blue-text" aria-hidden="true" >  </i> Connexion<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="{{route('register')}}"><i
              class="fas fa-sign-in-alt blue-text"></i> Inscription <span class="sr-only">(current)</span></a>
        </li>
     @else
        
        <div clas="dropdown-menu dropdown-menu-right" aria-labelledby="u<serDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();"> 
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>Deconnexion</a>
                                </div>
                                @endif
        @auth
        <li class="">
          <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">

        <i class="fas fa-user blue"></i> <span class="clearfix d-none d-sm-inline-block font-weight-bold">{{Auth::user()->name}}</span></a>

          </li>
    
         @endauth


      </ul>

    </div>

  </div>

</nav>
<!-- Navbar -->

</header>
@yield('content')
<!-- Footer -->
<footer class="page-footer text-center text-md-left stylish-color-dark pt-0">

<div style="background-color: #4285f4;">

  <div class="container">

    <!-- Grid row -->
    <div class="row py-4 d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">

        <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-6 col-lg-7 text-center text-md-right">

        <!-- Facebook -->
        <a class="fb-ic ml-0 px-2"><i class="fab fa-facebook-f white-text"> </i></a>

        <!-- Twitter -->
        <a class="tw-ic px-2"><i class="fab fa-twitter white-text"> </i></a>

        <!-- Google + -->
        <a class="gplus-ic px-2"><i class="fab fa-google-plus-g white-text"> </i></a>

        <!-- Linkedin -->
        <a class="li-ic px-2"><i class="fab fa-linkedin-in white-text"> </i></a>

       -->
        <!-- Instagram -->
        <a class="ins-ic px-2"><i class="fab fa-instagram white-text"> </i></a>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>

</div>

<!-- Footer Links -->
<div class="container mt-5 mb-4 text-center text-md-left">

  <div class="row mt-3">

    <!-- First column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

      <h6 class="text-uppercase font-weight-bold"><strong>Company name</strong></h6>

      <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

      <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet,

        consectetur

        adipisicing elit.</p>

    </div>
    <!-- First column -->

    <!-- Second column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

      <h6 class="text-uppercase font-weight-bold"><strong>Products</strong></h6>

      <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

      <p><a href="#!">MDBootstrap</a></p>

      <p><a href="#!">MDWordPress</a></p>

      <p><a href="#!">BrandFlow</a></p>

      <p><a href="#!">Bootstrap Angular</a></p>

    </div>
    <!-- Second column -->

    <!-- Third column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

      <h6 class="text-uppercase font-weight-bold"><strong>Useful links</strong></h6>

      <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

      <p><a href="#!">Your Account</a></p>

      <p><a href="#!">Become an Affiliate</a></p>

      <p><a href="#!">Shipping Rates</a></p>

      <p><a href="#!">Help</a></p>

    </div>
    <!-- Third column -->

    <!-- Fourth column -->
    <div class="col-md-4 col-lg-3 col-xl-3">

      <h6 class="text-uppercase font-weight-bold"><strong>Contact</strong></h6>

      <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

      <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>

      <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>

      <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>

      <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

    </div>
    <!-- Fourth column -->

  </div>

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright py-3 text-center">

  <div class="container-fluid">

    © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>

  </div>

</div>
<!-- Copyright -->

</footer>

<!-- Footer -->
<!-- SCRIPTS -->
<!-- JQuery -->
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="{{asset('style/js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('style/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('style/js/bootstrap.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('style/js/mdb.min.js')}}"></script>
  <!--Custom scripts-->
  <script>

new WOW().init();

    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').materialSelect();
    });

</script>
<script type="text/javascript">
/* WOW.js init */


new WOW().init();
// Tooltips Initialization

$(function () {

  $('[data-toggle="tooltip"]').tooltip()
})

let slider = $("#calculatorSlider");
let reseller = $("#resellerEarnings");
let client = $("#clientPrice");
let percentageBonus = 30; // = 30%

let license = {
  corpo: {
    active: true,
    price: 319,
  },
  dev: {
    active: false,
    price: 149,
  },
  priv: {
    active: false,
    price: 79,
  }
}

function calculate(price, value) {

  client.text((Math.round((price - (value / 100 * price)))) + '$');
  reseller.text((Math.round(((percentageBonus - value) / 100 * price))) + '$')
}

slider.on('input change', e => {

  if (license.priv.active) {

    calculate(license.priv.price, $(e.target).val());
  } else if (license.corpo.active) {

    calculate(license.corpo.price, $(e.target).val());
  } else if (license.dev.active) {

    calculate(license.dev.price, $(e.target).val());
  }
})

// Material Select Initialization
$(document).ready(function () {

  $('.mdb-select').material_select();
});

// SideNav Initialization
$(".button-collapse").sideNav();

</script>
