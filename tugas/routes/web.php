<?php

use App\Http\Controllers\dashboard;
use Illuminate\Support\Facades\Route;

use App\http\Controllers\Postcontrol;
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





Route::get('/', [Postcontrol::class,'index'] )->middleware('guest');
Route::get('/login_user', [Postcontrol::class,'login_user'] );
Route::get('/login_meja', [Postcontrol::class,'login_meja'] );
Route::get('/admin', [Postcontrol::class,'admin'] );
Route::get('/register', [Postcontrol::class,'register'] );
Route::get('login_user/register', [Postcontrol::class,'register'] );

Route::post('/login',[Postcontrol::class,'authenticate']);

Route::post('registerr',[Postcontrol::class,'store']);

Route::get('/dashboard',[dashboard::class,'index']);



Route::post('/pesan',[Postcontrol::class,'pesan'])->middleware('guest');

?>
