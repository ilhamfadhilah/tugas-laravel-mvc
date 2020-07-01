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


// Route::get('/', function () {
//     return view('index'); //bertugas untuk menampilkan sebuah tampilan php pada web welcome di views folder
// });
Route::get('/','HomeController@home');
Route::get('/form','AuthController@register');
Route::post('/datang','AuthController@welcome');
// Route::get('/halo/{nama}', function ($nama) {
//     return "halo $nama";
// });
// Route::get('/test', function () {
//     return view('test'); //bertugas untuk menampilkan sebuah tampilan php pada web welcome di views folder
// });
// Route::get('/form', 'RegisterController@form');

// Route::get('/sapa','RegisterController@sapa');

// Route::post('/sapa','RegisterController@sapa_post');

?>
