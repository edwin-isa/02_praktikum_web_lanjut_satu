<?php

use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    echo "Selamat Datang";
});

Route::get('/about', function () {
    return "Nama : Mohamad Edwin Isa Alfais, NIM : 2141720193";
});

Route::get('/article/{id}', function (Request $request, $id) {
    return "Halaman Article" . $id;
});
