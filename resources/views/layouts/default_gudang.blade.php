<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link href="{{ asset('css/gudang.css') }}" rel="stylesheet" type="text/css" >
    @yield('head')
<script>
  // toggle class scroll 
$(window).scroll(function() {
    if($(this).scrollTop() > 50)
    {
        $('.navbar-trans').addClass('afterscroll');
    } else
    {
        $('.navbar-trans').removeClass('afterscroll');
    }  

});
</script>
<div id="header">
<body style="background-size: cover; background-color: black; ">
  <nav class="navbar navbar-default navbar-doublerow navbar-trans navbar-fixed-top">
  <!-- top nav -->
  <nav class="navbar navbar-top hidden-xs">
    <div class="container">
      <!-- left nav top -->
      <ul class="nav navbar-nav pull-left">
        <li><a href="#"><span class="glyphicon glyphicon-thumbs-up text-white"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-globe text-white"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-pushpin text-white"></span></a></li>
        <li><a href="#"><span class="text-white">QUESTIONS? CALL: <b>+963000000000</b></span></a></li>
      </ul>
      <!-- right nav top -->
      <ul class="nav navbar-nav pull-right">
        <li><a href="modal-dialog" data-toggle="modal" data-target="#profil" class="text-white">About Us</a></li>
        <li><a href="#" class="text-white">Contact Us</a></li> 
      </ul>
    </div>
    <div class="dividline light-grey"></div>
  </nav>
  <!-- down nav -->
  <nav class="navbar navbar-down">
    <div class="container">
      <div class="flex-container">  
        <div class="navbar-header flex-item">
          <div class="navbar-brand" href="#"><h3>Inventory Management System</h3></div>
        </div>
        <ul class="nav navbar-nav flex-item hidden-xs">
          <li><a href="home">Home</a></li>
          <li><a href="purchasing">Pembelian</a></li> 
          <li><a href="retur">Retur</a></li>
          <li><a href="penerimaan">Penerimaan</a></li> 
          <li><a href="gudang">Gudang</a></li> 
        </ul>
        <ul class="dropdown nav navbar-nav flex-item hidden-xs pull-right ">
          <li>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="ganti_profil_perusahaan">Profil Perusahaan</a></li>
              <li><a href="ganti_password">Ganti Password</a></li>
              <li><a href="ganti_email">Ganti Email</a></li>
              <li class="divider"></li>
              <li><a href="logout">Logout</a></li>
            </ul>
          </li>
        </ul>
        <!-- dropdown only moblie -->
          <div class="dropdown visible-xs pull-right">
            <button class="btn btn-default dropdown-toggle " type="button" id="dropdownmenu" data-toggle="dropdown">
              <span class="glyphicon glyphicon-align-justify"></span> 
            </button>
            <ul class="dropdown-menu">
              <li><a href="#">Home</a></li>
              <li><a href="#">Pembelian</a></li> 
              <li><a href="#">Retur</a></li>
              <li><a href="#">Penerimaan</a></li> 
              <li><a href="#">Gudang</a></li> 
              <li role="separator" class="divider"></li>
              <li><a href="#">contact us</a></li>
            </ul>
          </div>
        </div>  
      </div>
    </nav>
  </nav> 
  </div>
<!--bg img  -->

<!-- Modal -->
<div class="modal fade" id="profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div style="text-align:center">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Profil Perusahaan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="avatar">
              <img alt="" src="http://lorempixel.com/100/100/people/8/">
              <h3>Halomalang.com</h3>
              <p class="text-uppercase">OFFICE</p>
              <span class="glyphicon glyphicon-map-marker"></span>Jl. Letjen Sutoyo 102
              <br>
              <span class="glyphicon glyphicon-earphone">0341-4376866</span> 

        </div>
      </div>
      <div class="modal-footer">
      <p class="text-left"><strong>Bio: </strong><br>
      <div style="text-align:justify">
        <p>Halomalang.com berdiri sejak 1 Maret 2012 dan kami berkomitmen untuk menyajikan berita tentang lifestyle yang terjadi di seputar Malang Raya. Dari awal kami mencoba untuk menampung keinginan pemilik bisnis yang ada di Malang Raya serta para pembaca website kami.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="container" style="margin-top: 200px">
    @yield('content')   
</div>

  <footer>
  <hr>
  <div class="pull-left footer-copyright";>
    <b>Inventory Management System</b>
  </div>
  <div class="pull-right footer-copyright">
    <b>Copyright@2017</b>
  </div>
  @yield('footer')
  </footer>

</body>
</html>
