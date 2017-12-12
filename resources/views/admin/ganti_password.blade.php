@extends('layouts.defaultlogin')

@section('title', 'Ganti Password')

@section('content')
  <div class="container" style="width: 400px; margin-top:120px;">
    <div class="card" style="width: 20rem ; height:20rem ; text-align: center;">

    <form method="post" action="">
    {{csrf_field()}}
      <h3 class="card-header">Ganti Password</h3>
      <br>
      <div class="form-group">
        <label for="email" class="col-sm-4 control-label">Email</label>
        <div class="col-sm-8">
        <input type="email" class="form-control" id="email" name="email" placeholder="ex admin@me.com" required>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for="password" class="col-sm-4 control-label">Password</label>
        <div class="col-sm-8">
        <input type="password" class="form-control" id="password" name="password" placeholder="*******" required>
        </div>  
      </div>
      <br>
      <div class="form-group">
        <label for="konfirmasi" class="col-sm-4 control-label">Konfirmasi</label>
        <div class="col-sm-8">
        <input type="konfirmasi" class="form-control" id="konfirmasi" name="konfirmasi" placeholder="*******" required>
        </div>  
      </div>
      <br><br><br>
    <a href="home""><button type="button" class="btn btn-danger" name="button">Batal</button></a>
    <button type="submit" class="btn btn-success" name="button">Ganti</button>
    </form>

  </div>
</div>
@endsection