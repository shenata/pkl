@extends('layouts.default')

@section('title','Penerimaan')

@section('content')

<div class="container" style="width: 400px; margin-left: 2px; margin-top:30px" >
<div class="card" style="width: 72rem ; height:40rem ;"">

<p class="pull-right">
<a href=""><span class="glyphicon glyphicon-pencil"></span> Edit</a> 
<a href=""><span class="glyphicon glyphicon-print"></span> Print </a>
<a href=""><span class="glyphicon glyphicon-remove"></span> Retur </a>
</p> 

<br>
<br><br>
<h2 style="text-align:center">Penerimaan</h2>


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
    <th width="100px">List Barang</th>
    <th width="150px">SKU</th>
    <th width="150px">Item</th> 
    <th width="150px">Unit</th>
    <th width="100px">Qty</th>
    <th width="180px">Varian</th>
    <th width="180px">Atribut</th>
    <th width="180px">Gudang</th>
  </tr>
  <tr>
    <td>Robot</td>
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
<div class="form-group">
        <div class="col-sm-10">
      <select class="form-control" id="unit" name="unit">
        <option value="pcs">Pcs</option>
        <option value="lusin">Lusin</option>
        <option value="gross">Gross</option>
      </select>
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
      <select class="form-control" id="unit" name="unit">
        <option value="pcs">Pcs</option>
        <option value="lusin">Lusin</option>
        <option value="gross">Gross</option>
      </select>
        </div>
      </div>
    </td>
    <td>
    <div class="form-group">
      <div class="col-sm-10">
      <select class="form-control" id="status" name="status">
        <option value="Gudang A">Gudang A</option>
        <option value="Gudang B">Gudang B</option>
      </select>
        </div>
    </td> 
  </tr>
</table>
<br>
<div class="pull-right">
	<button type="button" class="btn btn-success">Batal</button>
	<button type="button" class="btn btn-info">Simpan</button>
</div>
</div>
</div>

@endsection