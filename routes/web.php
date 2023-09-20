<?php

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Mahasiswacontroller;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\StasiunController;
use App\Http\Controllers\Tugascontroller;
use App\Http\Controllers\TugasController as ControllersTugasController;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;

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

//Route::get('mahasiswa', function () {
    //return ('<h1>Saya Mahasiswa STMIK Mardira Indonesia</h1>');
//});

//Route::get('/mahasiswa/{id}/{nama}', function ($id,$nama) {
   //return ("<h1>Saya Mahasiswa STMIK Mardira Indonesia Dengan Nim $id & Nama $nama</h1>");
//})->where(['id', '[0-9]+','nama'=>'[A-Za-z]+']);

//Route::get('/', function () {
    //return view('welcome');
//});

//Route::get('mahasiswa',[MahasiswaController::class,'index']);
//Route::get('mahasiswa/{id}',[MahasiswaController::class,'detail']);

Route::get('/',[MahasiswaController::class,'index']);
Route::get('/tampilan',[MahasiswaController::class,'tampilan']);
Route::get('/tentang',[MahasiswaController::class,'tentang']);
Route::get('/kontak',[MahasiswaController::class,'kontak']);

Route::resource('mahasiswa', MahasiswaController::class)->Middleware('isLogin');

Route::get('/sesi',[SessionController::class, 'index'])->Middleware('isTamu');
Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
Route::post('/sesi/login',[SessionController::class, 'login'])->Middleware('isTamu');
Route::get('/sesi/register',[SessionController::class, 'register'])->Middleware('isTamu');
Route::post('/sesi/create',[SessionController::class,'create'])->Middleware('isTamu');

Route::get('/', function () {
    return view('sesi/welcome');
})->Middleware('isTamu');

//Route::get('merk',[MerkController::class,'index']);
//Route::get('merk/{id}',[MerkController::class,'detail']);

Route::resource('merk', MerkController::class);


//Route::get('televisi',[TelevisiController::class,'index']);
//Route::get('televisi/{id}',[TelevisiController::class,'detail']);

//Route::get('/tugas',[Tugascontroller::class,'index']);
//Route::get('tugas/{id}',[Tugascontroller::class,'detail']);

Route::resource('tugas', Tugascontroller::class);

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/data', function () {
    return view('admin/data');
});

Route::get('/TV', function () {
    return view('admin/TV');
});
