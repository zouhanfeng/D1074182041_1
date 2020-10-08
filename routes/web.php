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

/*//---------------------------'users/{id}/hello/{abc}'-------------------------------------------------

Route::get('users/{id}/hello/{abc}', function ($id,$abc) {

    return $id."  ".view('welcome')."".$abc;

})->where(['id'=>'[0-9]+','abc'=>'[A-Z][a-z]+']);   //----------('[A-Z][a-z]+')!=('[A-Za-z]+')

//-----------------------------'users/{id?}/hello/'-----------------------------------------------

Route::get('users/hello/{id?}', function ($id=41) {

    return $id."  ".view('welcome');

})->where(['id'=>'[0-9]+']); //where('id','[0-9]+');*/


//-----------------------------'/'-----------------------------------------------

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//----------------------------'/channels/creat'------------------------------------------------

Route::get('/channels/creat', function () {
    return view('channels.creat');
})->name('creat');

//----------------------------'/channels/edit'------------------------------------------------

Route::get('/channels/edit', function () {
    return view('channels.edit');
})->name('edit');

//----------------------------'/channels/index'------------------------------------------------

Route::get('/channels', function () {
    return view('channels.index');
})->name('channels');

//----------------------------'/channels/show'------------------------------------------------

Route::get('/channels/show', function () {
    return view('channels.show');
})->name('show');


//----------------------------'/youtuber/creat'------------------------------------------------

Route::get('/youtuber/creat', function () {
    return view('youtuber.creat');
})->name('creat');

//----------------------------'/youtuber/edit'------------------------------------------------

Route::get('/youtuber/edit', function () {
    return view('youtuber.edit');
})->name('edit');

//----------------------------'/youtuber/index'------------------------------------------------

Route::get('/youtuber', function () {
    return view('youtuber.index');
})->name('youtuber');

//----------------------------'/youtuber/show'------------------------------------------------

Route::get('/youtuber/show', function () {
    return view('youtuber.show');
})->name('show');
