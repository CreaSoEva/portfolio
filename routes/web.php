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

Route::get('/', 'PortfolioController@index')->name('accueil');
Route::get('/profil', 'PortfolioController@profil')->name('profil');
Route::get('/contact', 'PortfolioController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');