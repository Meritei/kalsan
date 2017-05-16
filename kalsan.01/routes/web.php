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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/shop', 'ShopController@index')->name('shop');

Route::get('/supplier', 'SupplierController@index')->name('supplier');

Route::get('/store', 'StoreController@index')->name('store');

Route::get('/settings', 'SettingsController@index')->name('settings');

Route::get('/createsupplier', 'CreatesupplierController@index')->name('createsupplier');
Route::name('creatingsupplier')->get('creatingsupplier')->uses('CreatesupplierController@creatingsupplier');

Route::name('scream')->get('scream')->uses('SupplierController@scream');

//Route::get('freesupplier/{$supplier->supplierid}','SupplierController@scream')->name('freesupplier');

Route::get('/addstock', 'AddstockController@index')->name('addstock');
Route::name('addingstock')->get('addingstock')->uses('AddstockController@addingstock');



Route::get('/movetoshop', 'MovetoshopController@index')->name('movetoshop');
Route::name('movingtoshop')->get('movingtoshop')->uses('MovetoshopController@movingtoshop');


Route::get('/pointofsell', 'pointofsellController@index')->name('pointofsell');
Route::name('sell')->get('sell')->uses('pointofsellController@sell');

//Route::get('/movetostore', 'movetostoreController@index')->name('movetostore');
Route::name('movetostore')->get('/movetostore')->uses('movetostoreController@index');

Route::name('moveitem')->get('moveitem')->uses('movetostoreController@moveitem');


Route::resource('/movetostore','movetostoreController');

Route::get('letsmove', 'MovetostoreController@letsmove')->name('letsmove');
