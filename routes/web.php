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



// Demo routes
Route::get('/login', 'LoginController@index');
Route::get('/datatables', 'PagesController@datatables');
Route::get('/ktdatatables', 'PagesController@ktDatatables');
Route::get('/select2', 'PagesController@select2');
Route::get('/icons/custom-icons', 'PagesController@customIcons');
Route::get('/icons/flaticon', 'PagesController@flaticon');
Route::get('/icons/fontawesome', 'PagesController@fontawesome');
Route::get('/icons/lineawesome', 'PagesController@lineawesome');
Route::get('/icons/socicons', 'PagesController@socicons');
Route::get('/icons/svg', 'PagesController@svg');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@index')->name('home');
Route::get('/login', 'LoginNixusController@index')->name('login');

Route::get('/loginF', 'LoginFilmapsController@index')->name('loginF');
Route::get('/registerF', 'RegisterFilmapsController@index')->name('registerF');
Route::get('/contactF', 'ContactFilmapsController@index')->name('contactF');
Route::get('/itemF', 'ItemFilmapsController@index')->name('itemF');
Route::get('/catF', 'CategoryFilmapsController@index')->name('catF');
Route::get('/homeF', 'PrincipalFilmapsController@index')->name('homeF');
Route::get('/searchF', 'SearchFilmapsController@index')->name('searchF');

Route::get('/mensajes', 'MensajesController@index')->name('mensajes');
Route::get('/ciclos', 'TiempoCiclosController@index')->name('ciclos');



Route::get('/remoteHome', 'RemoteHomeController@index')->name('remoteHome');
Route::get('/remoteItem', 'RemoteItemController@index')->name('remoteItem');
