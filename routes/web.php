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

//----------------------------'/channel/creat'------------------------------------------------

Route::get('/channel/creat', function () {
    return view('channel.creat');
})->name('creat');

//----------------------------'/channel/edit'------------------------------------------------

Route::get('/channel/edit', function () {
    return view('channel.edit');
})->name('edit');

//----------------------------'/channel/index'------------------------------------------------

Route::get('/channel', function () {
    return view('channel.index');
})->name('channel');

//----------------------------'/channel/show'------------------------------------------------

Route::get('/channel/show', function () {
    return view('channel.show');
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
