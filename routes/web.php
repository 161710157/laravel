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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function() {
	return '<h1>Halo</h1>'
	.'Selamat datang di webapp saya<br>'
	.'Laravel, emang keren.';
});

Route::get('/about/1',function() {
	return '<h2>ini halaman About1</h2>';

});
Route::get('/about/2',function() {
	return '<h1>ini halaman About2</h1>';
});
Route::get('/about/3',function() {
	return '<h1>ini halaman About3</h1>';
});
Route::get('/about/4',function() {
	return '<h1>ini halaman About4</h1>';
});
Route::get('/about/5',function() {
	return '<h1>ini halaman About5</h1>';

});

Route::get('/kontak', function() {
	return view('kontak');
	});
// router parameter 
Route::get('/about/{id}', function($a){
	return 'ini halaman about <br>'.$a.'</br>';
});
Route::get('/kantin/{baso}/{susu}/{bolu}', function($a,$b,$c){
	return 'saya pesan  <b>'.$a.'</b></br>'
	       .'minuman saya <b>'.$b.'</b></br>'
	       .'tambah cemilan <b>'.$c.'</b></br>';
});
// route optional parameter
Route::get('user/{name?}', function ($name = 'john') {
	return 'nama saya adalah '.$name;

});