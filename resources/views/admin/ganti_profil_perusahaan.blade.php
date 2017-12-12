@extends('layouts.defaultlogin')

@section('title', 'Ganti Profil Perusahaan')

@section('content')
  <div class="container" style="width: 400px; margin-top:120px; margin-left:420px">
    <div class="card" style="width: 32rem ; height:23rem ; text-align: center;">

    <form method="post" action="">
    {{csrf_field()}}
      <h3 class="card-header"> Ganti Profil Perusahaan</h3>
      <br>
      <div class="form-group">
        <label for="nama_perusahaan" class="col-sm-4 control-label">Nama Perusahaan</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="session perusahaan" required>
        </div>
      </div>
       <br>
      <div class="form-group">
        <label for="alamat" class="col-sm-4 control-label">Alamat</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat baru" required>
        </div>  
      </div>
      <br>
      <div class="form-group">
        <label for="telepon" class="col-sm-4 control-label">Telepon</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" id="telepon" name="telepon" placeholder="telepon baru" required>
        </div>  
      </div>
      <br>
      <div class="form-group">
        <label for="bio" class="col-sm-4 control-label">Bio</label>
        <div class="col-sm-8">
        <input type="text-area" class="form-control" id="bio" name="bio" placeholder="max text 200" required>
        </div>  
      </div>
      <br>
      <div class="form-group">
        <label for="password" class="col-sm-4 control-label">Password</label>
        <div class="col-sm-8">
        <input type="password" class="form-control" id="password" name="password" placeholder="*******" required>
        </div>  
      </div>
      <br><br>

    <a href="home"><button type="button" class="btn btn-danger" name="button">Batal</button></a>
    <button type="submit" class="btn btn-success" name="button">Ganti</button>
    </form>
  </div>
</div>
@endsection
