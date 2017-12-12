<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/loginpage', function () {
    return view('/admin/login');
});

Route::get('register', function () {
    return view('/admin/register');
});

Route::get('lupa', function () {
    return view('/admin/lupa');
});

Route::get('register', function () {
    return view('/admin/register');
});

Route::get('ganti_password', function () {
	return view('/admin/ganti_password');
});

Route::get('ganti_email', function () {
	return view('/admin/ganti_email');
});

Route::get('ganti_profil_perusahaan', function(){
	return view('/admin/ganti_profil_perusahaan');
	
});

Route::get('gudang', function(){
	return view('/admin/gudang');
});

Route::get('gudang2', function(){
	return view('/admin/gudang2');
});

Route::get('home',function(){
	if(Session::has('admin')){
		return view('/admin/home');
	}
	else{
		return redirect('loginpage');
	}
});

Route::get('logout' ,function(){
	Session::forget('admin') ;
	return redirect('loginpage');
});

Route::get('purchasing',function(){
	if(Session::has('admin')){
		return view('/admin/purchasing');
	}
	else{
		return redirect('loginpage');
	}
});

Route::get('purchasing2', function () {
    return view('/admin/purchasing2');
});

Route::get('retur', function () {
    return view('/admin/retur');
});

Route::get('penerimaan', function () {
    return view('/admin/penerimaan');
});

Route::post('/login', 'AdminController@proseslogin');
Route::post('/prosesregister', 'AdminController@prosesregister');

