<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba', function () {
    return "Hallo :D";
});

Route::get('/array', function () {
    return ["erey 1", "erey 2"];
});

Route::get('/object', function () {
    return response()->json(
        [
            "Nama" => "Ihza Dzikri Fauzi",
            "kelas" => "XII RPL 4",
            "nis" => 3103120109
        ],
        201
    );
});


