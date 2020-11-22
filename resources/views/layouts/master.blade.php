<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="icon" href="img/icon.jpg" type="image/x-icon" />
  <title>Aunt Rosie's: @yield('title')</title>

  <!-- Icon css link -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="vendors/linearicons/style.css" rel="stylesheet" />
  <link href="vendors/flat-icon/flaticon.css" rel="stylesheet" />
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Rev slider css -->
  <link href="vendors/revolution/css/settings.css" rel="stylesheet" />
  <link href="vendors/revolution/css/layers.css" rel="stylesheet" />
  <link href="vendors/revolution/css/navigation.css" rel="stylesheet" />
  <link href="vendors/animate-css/animate.css" rel="stylesheet" />

  <!-- Extra plugin css -->
  <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet" />
  <link href="vendors/magnifc-popup/magnific-popup.css" rel="stylesheet" />

  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
@include('layouts.nav')

<section class="banner_area">
  <div class="container">
    <div class="banner_text">
      <h3>@yield('title')</h3>
      <ul>
        <li><a href="home">Home</a></li>
        @yield('banner_link')
      </ul>
    </div>
  </div>
</section>

@if($flash = session('message'))
  <div id="flash-message" class="alert alert-success" role="alert">
    {{ $flash }}
  </div>
@endif

<main role="main">
  @yield('content')
</main>

@include('layouts.footer')