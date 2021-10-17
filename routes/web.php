<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\PemerintahanController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/input', function () {
//     $formdata = [
//         'Nama' => ['text', 'Masukkan nama'], 
//         'Alamat' => ['text', 'Masukkan alamat'], 
//         'Username' => ['email', 'Username'], 
//         'Password' => ['password', 'Password'], 
//         'Blood' => ['select', 'Golongan darah', ['A','B','AB','O']], 
//         'Hobby' => ['checkbox', 'Pilih hobby', ['Jalan-jalan', 'Memancing', 'Berenang']],
//         'Gender' => ['radio', 'Jenis kelamin', ['Pria', 'Wanita']], 
//         'Profile' => ['textarea', 'Profil anda'], 
//         'btnsimpan' => ['submit', 'Simpan'] 
//     ];
//     return view('pages/form', compact('formdata'));
// });

// Route::post('/input/result', ['as'=>'result','uses'=>'App\Http\Controllers\UserController@simpan_data']);

Route::get('/animals', [App\Http\Controllers\AnimalController::class,'index']);
Route::get('/animals/add', [App\Http\Controllers\AnimalController::class,'addanimal']);
Route::post('/animals/savedata', ['as'=>'savedata','uses'=>'App\Http\Controllers\AnimalController@saveanimal']);
Route::get('/animals/{id}/detail',[App\Http\Controllers\AnimalController::class,'detail']);
Route::get('/animals/{id}/delete',[App\Http\Controllers\AnimalController::class,'delete']);
Route::get('/animals/{id}/edit',[App\Http\Controllers\AnimalController::class,'edit']);
Route::post('/animals/{id}/saveedit',[App\Http\Controllers\AnimalController::class,'saveedit']);
// Route::get('/index', function () {
//     return view('pages/table');
// });


Route::get('/pemerintah', [App\Http\Controllers\PemerintahanController::class,'index_provinsi']);
Route::get('/pemerintah/add', ['as'=> 'addProvinsi','uses'=> 'App\Http\Controllers\PemerintahanController@addProvinsi']);
Route::post('/pemerintah/savedata', ['as'=> 'saveAddProvinsi','uses'=> 'App\Http\Controllers\PemerintahanController@saveAddProvinsi']);
Route::get('/pemerintah/{id}/edit',[App\Http\Controllers\PemerintahanController::class,'editProvinsi']);
Route::post('/pemerintah/{id}/saveedit',[App\Http\Controllers\PemerintahanController::class,'saveEditProvinsi']);
Route::get('/pemerintah/{id}/delete',[App\Http\Controllers\PemerintahanController::class,'deleteProvinsi']);


Route::prefix('/pemerintah')->group(function(){
    Route::get('/', [PemerintahanController::class,'index_provinsi'])->name('listProvinsi');
    Route::get('/add', [PemerintahanController::class, 'addProvinsi'])->name('addProvinsi');
    Route::post('/savedata', [PemerintahanController::class, 'saveAddProvinsi'])->name('saveAddProvinsi');
    Route::get('/{id}/edit',[PemerintahanController::class,'editProvinsi'])->name('editProvinsi');
    Route::post('/{id}/saveedit',[PemerintahanController::class,'saveEditProvinsi'])->name('saveEditProvinsi');
    Route::get('/{id}/kotaProvinsi', [PemerintahanController::class,'list_kota'])->name('listKotaProvinsi');
    Route::get('/{id}/delete',[PemerintahanController::class,'deleteProvinsi'])->name('deleteProvinsi');

    //Kota
    Route::get('/kota', [PemerintahanController::class,'index_kota'])->name('listKota');
    Route::get('/kota/add', [PemerintahanController::class, 'addKota'])->name('addKota');
    Route::post('/kota/savedata', [PemerintahanController::class, 'saveAddKota'])->name('saveAddKota');
    Route::get('/kota/{id}/edit',[PemerintahanController::class,'editKota'])->name('editKota');
    Route::post('/kota/{id}/saveedit',[PemerintahanController::class,'saveEditKota'])->name('saveEditKota');
    Route::get('/kota/{id}/delete',[PemerintahanController::class,'deleteKota'])->name('deleteKota');
});



















// Route::get('/our-studio', function () {
//     return view('pages/our-studio');
// });

// Route::get('/detail-video', function () {
//     return view('pages/detail-video');
// });

// Route::get('/latihan', function () {
//     return view('pages/latihan');
// });