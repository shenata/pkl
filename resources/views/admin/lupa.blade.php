@extends('layouts.defaultlogin')

@section('title', 'Lupa Password')

@section('content')
  <div class="container" style="width: 400px; margin-top:150px;">
    <div class="card" style="width: 20rem ; height:15rem ; text-align: center;">
    <form>
      <h3 class="card-header"> Lupa Password</h3>
      <br>
      <div class="form-group">
        <label for="email" class="col-sm-3 control-label">Email</label>
        <div class="col-sm-8">
        <input type="email" class="form-control" id="email" name="email" placeholder="ex admin@me.com" required>
        </div>
      </div>
      <br><br>
      <a href="loginpage"><button type="button" name="button">Batal</button></a>
      <button type="button" name="butston">Ganti</button>
    </form>
    <br>
    <a href="#"><u>Kirim ulang?</u></a>
  </div>
</div>
@endsection
