@extends('layouts.default_gudang')

@section('title','Gudang')

@section('content')

<div style="margin-top:180px">
<div class="navbar navbar-inverse navbar-fixed-left">
  <a class="navbar-brand" href="#">Daftar Gudang</a>
  <ul class="nav navbar-nav">
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Gudang A </span></a>
     <ul class="dropdown-menu" role="menu">
     <div style="text-align:center">
      <li><a href="#"><label>Gudang A</label></a> <a href=""><span class="glyphicon glyphicon-cog pull-right"></a></span></li>
      <label>Kepala Gudang : Agus</label>
      <br>
      <label>Alamat : Lt Sutoyo 100 A</label>
      <br>
      <label>Kota : Malang</label>  
      <br>
      <label>Status : Buka</label> 
      <br>
      <label>Total : 1000 unit </label>   
      <li class="divider"></li>
      <li><a href="gudang2">Kartu Stock: 125 unit</a></li>
      <li class="divider"></li>
      <li><a href="#">Pegawai : 50 unit</a></li>
      </div>
     </ul>
   </li>
   <li><a href="#">Gudang B</a></li>
   <li><a href="#">Gudang C</a></li>
   <li><a href="#">Gudang D</a></li>
   <li><a href="#">Gudang E</a></li>
  </ul>
</div>
</div>

<style>
    .navbar-fixed-left {
  width: 250px;
  position: fixed;
  border-radius: 0;
  height: 100%;
}

.navbar-fixed-left .navbar-nav > li {
  float: none;  /* Cancel default li float: left */
  width: 150px;
}

.navbar-fixed-left + .container {
  padding-left: 250px;
}

/* On using dropdown menu (To right shift popuped) */
.navbar-fixed-left .navbar-nav > li > .dropdown-menu {
  margin-top: -108px;
  margin-left: 230px;
  width:260px;
}
</style>

@section('footer')
@endsection