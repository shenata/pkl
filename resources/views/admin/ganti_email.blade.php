@extends('layouts.defaultlogin')

@section('title', 'Ganti Email')

@section('content')
  <div class="container" style="width: 450px; margin-top:120px;">
    <div class="card" style="width: 30rem ; height:15rem ; text-align: center;">

    <form method="post" action="">
    {{csrf_field()}}
      <h3 class="card-header">Ganti Email</h3>
      <br>
      <div class="form-group">
        <label for="email" class="col-sm-3 control-label">Email Baru</label>
        <div class="col-sm-8">
        <input type="email" class="form-control" id="email" name="email" placeholder="emailbaru@me.com" required>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for="password" class="col-sm-3 control-label">Password</label>
        <div class="col-sm-8">
        <input type="password" class="form-control" id="password" name="password" placeholder="*******" required>
        </div>  
      </div>
      <br><br>
    <a href="home" style="color:black;"><button type="button" class="btn btn-danger" name="button">Batal</button></a>
    <button type="submit" class="btn btn-success" name="button">Ganti</button>
    </form>

  </div>
</div>
@endsection