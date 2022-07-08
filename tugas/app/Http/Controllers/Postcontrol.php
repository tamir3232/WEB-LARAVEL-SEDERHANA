<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


use App\Models\Post;
use Illuminate\Hashing\BcryptHasher;

class Postcontrol extends Controller
{
    public function index(){
        return view('index');
    }
    public function login_user(){
        return view('login');
    }
    public function login_meja(){
        return view('login1');
    }
    public function admin(){
        return view('loginadmin');
    }
    public function register(){
        return view('register');
    }
    public function store(){
        $data = request() ->all();


        $data['password'] = Hash::make($data['password']);
        user::create($data);
        return view('register');
    }

    public function authenticate(Request $request){

        
       $credentials =  $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if($credentials["username"]=="admin" && $credentials["password"]== "admin"){
            return view('halamanadmin');

        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        };

        return view('index');
        
    }


    public function pesan(){
        $data = request() ->all();
        
        $con = mysqli_connect("localhost","root","","kantinpakdin");
        
        $nama = $data["nama"];
        $menu = $data["menu"];

        
        $queryy = mysqli_query($con, "INSERT INTO pesanan VALUES ('$nama','$menu')");

        return view('index');
    }

    

    

}
