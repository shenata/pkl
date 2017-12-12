@extends('layouts.default_gudang')

@section('title','Gudang2')

@section('content')

<div style="margin-top:180px">
<div class="navbar navbar-inverse navbar-fixed-left">
  <a class="navbar-brand" href="#">Kartu Stock</a>
  <ul class="nav navbar-nav">
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Barang A </span></a>
     <ul class="dropdown-menu" role="menu">
     <h4 class="pull-left">Kartu Stock</h4>
     <div class="pull-right">
            <form id="custom-search-form" class="form-search form-horizontal pull-right">
                <div class="input-append">
                    <input type="text" class="search-query" placeholder="Search">
                    <button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
                </div>
            </form>
    </div>
    <br><br>
     <label class="pull-left">Sory by date : </label>
     <div class="pull-right">
     <a href="gudang "><label><span class="glyphicon glyphicon-chevron-left"></span>Kembali</label></a>
     <a href=""><label><span class="glyphicon glyphicon glyphicon-plus"></span>Tambah</label></a>  
     </div>       
     <div style="text-align:center">
<table style="width:100%">
  <tr>
    <th width="240px">Tanggal</th>
    <th width="200px">SKU</th>
    <th width="200px">Masuk</th> 
    <th width="200px">Keluar</th> 
    <th width="200px">Sisa Stock</th>
  </tr>
  <tr>
    <td>
     <div class="col-sm-10">
      <input type="date" class="form-control" name="">
    </div>
    </td>
    <td>
     <div class="col-sm-10">
      <input type="text" class="form-control" name="">
    </div>
    </td>
    <td>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="">
    </div>
    </td>
    <td>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="">
    </div>
    </td> 
    <td>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="">
    </div>
    </td> 
  </tr>
</table>
<br>
<div class="pull-right">
  <a href="gudang"><button type="button" class="btn btn-success">Batal</button></a>
  <button type="button" class="btn btn-info">Simpan</button>
</div>
      </div>
     </ul>
   </li>
   <li><a href="#">Barang B</a></li>
   <li><a href="#">Barang C</a></li>
   <li><a href="#">Barang D</a></li>
   <li><a href="#">Barang E</a></li>
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
  width:600px;
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
}

td, th {
    border: 2px solid #dddddd;
    text-align: center;
    padding: 2px;
}
</style>

@section('footer')
@endsection