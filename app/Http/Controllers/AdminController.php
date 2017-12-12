<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Admin;


class AdminController extends Controller
{

    public function proseslogin(Request $request){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $data = DB::table('admin')->where ([['email',$email],['password',$password]]);

        $count = $data->count();
        $admin = $data->first();

        if($count >= 1){
            session(['admin'=>$admin->email]);
            return redirect('home');
        }
        else{
            return redirect('loginpage');
        }
    }

    public function prosesregister(Request $request){
        $email = $_POST['email'];
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $kantor = $_POST['kantor'];

        $admin = new Admin();
        $admin->email=$email;
        $admin->nama=$nama;
        $admin->jabatan=$jabatan;
        $admin->kantor=$kantor;   

        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
        }
        $password=implode($pass);

        $admin->password=$password;
        $admin->save();

        return redirect('loginpage');
    }
}
