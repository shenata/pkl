@extends('layouts.defaultlogin')

@section('title', 'Login Page')

@section('content')
  <div class="container" style="width: 400px; margin-top:120px;">
    <div class="card" style="width: 20rem ; height:20rem ; text-align: center;">

    <form method="post" action="login">
    {{csrf_field()}}
      <h3 class="card-header"> Login</h3>
      <br>
      <div class="form-group">
        <label for="email" class="col-sm-3 control-label">Email</label>
        <div class="col-sm-8">
        <input type="email" class="form-control" id="email" name="email" placeholder="ex admin@me.com" required>
        </div>
      </div>
      <br><br>
      <div class="form-group">
        <label for="password" class="col-sm-3 control-label">Password</label>
        <div class="col-sm-8">
        <input type="password" class="form-control" id="password" name="password" placeholder="*******" required>
        </div>  
      </div>
      <br><br>

    <a href="register" style="color:black;"><button type="button" class="btn btn-danger" name="button">Daftar</button></a>
    <button type="submit" class="btn btn-success" name="button">Masuk</button>
    </form>
    <br>
    <a href="lupa"><u>Lupa password ?</u></a>
  </div>
</div>
@endsection
