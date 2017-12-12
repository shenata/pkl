@extends('layouts.defaultlogin')

@section('title', 'Daftar')

@section('content')
  <div class="container" style="width: 400px; margin-top:120px;">
    <div class="card" style="width: 20rem ; height:23rem ; text-align: center;">
    <form action="prosesregister" method="POST">
    {{csrf_field()}}
      <h3 class="card-header"> Daftar</h3>
      <br>
      <div class="form-group">
        <label for="email" class="col-sm-3 control-label">Email</label>
        <div class="col-sm-8">
        <input type="email" class="form-control" id="email" name="email" placeholder="ex admin@me.com" required>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for="nama" class="col-sm-3 control-label">Nama</label>
        <div class="col-sm-8">
        <input type="nama" class="form-control" id="nama" name="nama" placeholder="nama" required>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for="jabatan" class="col-sm-3 control-label">jabatan</label>
        <div class="col-sm-8">
      <select class="form-control" id="jabatan" name="jabatan">
        <option value="admin">Admin</option>
        <option value="kepalagudang">Kepala Gudang</option>
        <option value="gudang">Gudang</option>
      </select>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for="kantor" class="col-sm-3 control-label">Kantor</label>
        <div class="col-sm-8">
      <select class="form-control" id="kantor" name="kantor">
        <option value="Halomalang">Halomalang</option>
        <option value="Bloosom">Bloosom</option>
        <option value="Kidzo">Kidzo</option>
        <option value="SewaMainanAnak">SewaMainanAnak</option>
      </select>
        </div>
      </div>
      <br><br>
      <a href="loginpage"><button type="button" name="button">Batal</button></a>
      <button type="submit" name="button">Daftar</button>
    </form>
    <br>
  </div>
</div>
@endsection
