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



Route::get('/home','MainController@home');
Route::get('/about','MainController@about');

Route::get('/booking','MainController@booking');

Route::get('/manage','ManageController@home');

Route::get('/managehotel','ManageController@managerooms');
Route::get('/managehotel/add','ManageController@manageroomsadd');
Route::post('/managehotel/create','ManageController@manageroomscreate');
Route::get('/managehotel/edit/{id}','ManageController@manageroomsedit');
Route::post('/managehotel/update/{id}','ManageController@manageroomsupdate');
Route::get('/managehotel/delete/{id}','ManageController@manageroomsdelete');

Route::get('/manageuser','ManageController@manageuser');
Route::get('/manageuser/add','ManageController@manageuseradd');
Route::post('/manageuser/create','ManageController@manageusercreate');
Route::get('/manageuser/edit/{id}','ManageController@manageuseredit');
Route::post('/manageuser/update/{id}','ManageController@manageuserupdate');
Route::get('/manageuser/delete/{id}','ManageController@manageuserdelete');
