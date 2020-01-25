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
//---------------------------------- Admin panel---------------------------------------------------------

Route::get('/adminpanel.dashboard', function () {
    return view('adminpanel.dashboard');
});

//---------------------------------- Login----------------------------------------------------------------

Route::get('/login', function () {
    return view('login');
});


Route::get('/adminpanel.Tregistration', function () {
    return view('adminpanel.Tregistration');
});
Route::get('/adminpanel.Sregistration', function () {
    return view('adminpanel.Sregistration');
});
Route::get('/adminpanel.user', function () {
    return view('adminpanel.user');
});


// Route::get("/Login", "logincontoller@adminpage");

// Route::get('/admin', 'logincontoller@adminpage')->name('admin');



