<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
})->name('inicio');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/cadastro_hospede', function () {
		return view('hos.cadastro');
	})->name('cadastro_hos');
	Route::get('/principal_hospede', 'HospedeControlador@index')->name('principal_hos');
	Route::get('/profile/hos', ['as' => 'hos.editar', 'uses' => 'ProfileController@edit']);
	Route::put('/profile/hos', ['as' => 'hos.update', 'uses' => 'ProfileController@update']);
	Route::put('/profile/hos/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

	Route::get('/hospede/editar/hos/{id}', 'HospedeControlador@edit');
	Route::post('/hospede/hos/{id}', 'HospedeControlador@update');

	Route::get('/reserva/hos/{id}', 'ReservaControlador@create');
	Route::post('/reserva/hos/novo', 'ReservaControlador@store');
	Route::get('/reserva/apagar/hos/{id}', 'ReservaControlador@destroy');

});

Route::group(['middleware' => 'auth'], function () {
	Route::get('/Listar_Reservas', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('/icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('/principal', function () {
		return view('pages.calendario');
	})->name('calendario');

	Route::get('/autorizar', function () {
		return view('pages.autorizar_caixa');
	})->name('autorizar');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('/profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('/profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('/profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('/hospede/index', 'HospedeControlador@index')->name('index_hospede');
	Route::get('/hospede', 'HospedeControlador@create')->name('hospede');
	Route::post('/hospede/novo', 'HospedeControlador@store');
	Route::get('/hospede/apagar/{id}', 'HospedeControlador@destroy');
	Route::get('/hospede/editar/{id}', 'HospedeControlador@edit');
	Route::post('/hospede/{id}', 'HospedeControlador@update');
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('/autorizar', 'CaixaControlador@autorizar')->name('autorizar');
	Route::get('/caixa', 'CaixaControlador@index')->name('caixa');
	Route::post('/caixa/novo', 'CaixaControlador@store');
	Route::post('/caixa/autoriza', 'CaixaControlador@autoriza');
	Route::get('/caixa/fechar', 'CaixaControlador@fechar')->name('fechar');
	Route::post('/caixa/fecha', 'CaixaControlador@fecha');
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('/quartos', 'QuartoControlador@index')->name('quartos');
	Route::post('/quartos/{id}', 'QuartoControlador@update');
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('/reserva/index', 'ReservaControlador@index')->name('index_reserva');
	Route::get('/reserva/hospedes', 'ReservaControlador@hospede')->name('reserva');
	Route::get('/reserva/{id}', 'ReservaControlador@create');
	Route::post('/reserva/novo', 'ReservaControlador@store');
	Route::get('/reserva/apagar/{id}', 'ReservaControlador@destroy');
	Route::get('/reserva/pag/{id}', 'ReservaControlador@updatePag');
	Route::get('/reserva/checkin/{id}/{cod}', 'ReservaControlador@updateCheckin');
	Route::get('/reserva/checkout/{id}/{cod}', 'ReservaControlador@updateCheckout');
});
