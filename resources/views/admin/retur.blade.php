@extends('layouts.default')

@section('title','Retur')

@section('content')




<div class="container" style="width: 400px; margin-left: 85px; margin-top:180px" >
<div class="card" style="width: 72rem ; height:40rem ;"">

<p class="pull-right">
<a href=""><span class="glyphicon glyphicon-pencil"></span> Edit</a> 
<a href=""><span class="glyphicon glyphicon-print"></span> Print </a>
<a href=""><span class="glyphicon glyphicon-remove"></span> Retur </a>
</p> 


<br><br>
<h2 style="text-align:center">Nota Retur</h2>

<br>
<p class="pull-left">Supplier : 
<td>
  <div class="col-sm-2">
    <input type="text" class="form-control" name=""> 
  </div>
</td>
</p>
<p class="pull-right">
Nomor : <input type="text" name="">
<br> Tanggal : <input type="text" name="">
<br> Total : <input type="text" name="">
 </p>
<style>
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

<table style="width:100%">
  <tr>
    <th width="100px">Item</th>
    <th width="200px">Disc</th>
    <th width="200px">Harga Satuan</th> 
    <th width="100px">Qty</th>
    <th width="200px">total</th>
    <th width="200px">Status</th>
    <th width="50px">Retur</th>
    <th width="100px">Delete</th>
  </tr>
  <tr>
    <td>Robot</td>
    <td>
     <div class="form-group">
        <div class="col-sm-7">
      <select class="form-control" id="disc" name="disc">
        <option value="0">0%</option>
        <option value="5%">5%</option>
        <option value="10%">10%</option>
      </select>
        </div>
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
    <td>11050</td>
    <td>
    	<div class="form-group">
        <div class="col-sm-10">
      <select class="form-control" id="status" name="status">
        <option value="Pending">Pending</option>
        <option value="Lunas">Lunas</option>
      </select>
        </div>
      </div>
    </td>
    <td>
    	<input type="checkbox" name="">
    </td> 
    <td>
    	<button type="button" class="btn btn-danger">delete</button>
    </td>
  </tr>
  <tr>
    <td>Robot</td>
    <td>
     <div class="form-group">
        <div class="col-sm-7">
      <select class="form-control" id="disc" name="disc">
        <option value="0">0%</option>
        <option value="5%">5%</option>
        <option value="10%">10%</option>
      </select>
        </div>
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
    <td>50</td>
    <td>
      <div class="form-group">
        <div class="col-sm-10">
      <select class="form-control" id="status" name="status">
        <option value="Pending">Pending</option>
        <option value="Lunas">Lunas</option>
      </select>
        </div>
      </div>
    </td>
    <td>
      <input type="checkbox" name="">
    </td> 
    <td>
      <button type="button" class="btn btn-danger">delete</button>
    </td>
  </tr>
  <tr>
    <td>Robot</td>
    <td>
     <div class="form-group">
        <div class="col-sm-7">
      <select class="form-control" id="disc" name="disc">
        <option value="0">0%</option>
        <option value="5%">5%</option>
        <option value="10%">10%</option>
      </select>
        </div>
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
    <td>50</td>
    <td>
      <div class="form-group">
        <div class="col-sm-10">
      <select class="form-control" id="status" name="status">
        <option value="Pending">Pending</option>
        <option value="Lunas">Lunas</option>
      </select>
        </div>
      </div>
    </td>
    <td>
      <input type="checkbox" name="">
    </td> 
    <td>
      <button type="button" class="btn btn-danger">delete</button>
    </td>
  </tr>
</table>
<br>
<div class="pull-right">
  <button type="button" class="btn btn-success">Batal</button>
  <button type="button" class="btn btn-info">Simpan</button>
</div>
<br><br>
<p class="pull-left" position="absolute">	
<textarea placeholder="catatan" name="comment" form="usrform"> </textarea>
<br>
Keterangan
</p>

<p class="pull-right">
<textarea name="comment" form="usrform"></textarea>
<br>
Petugas	
</p>

@section('footer')

@endsection