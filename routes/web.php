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

Route::get('homeBD', function () {
    return view('homeBD');
});
Route::get('homeMDD', function () {
    return view('homeMDD');
});


// Route::get('db', 'ListdataController@addproject');

Route::get('Newarrival', 'ListdataController@Newarrivaldata');

Route::get('Popular', function () {
    return view('pagePopular');
});

Route::get('wed', function () {
    return view('wedType.wed');
});

Route::get('wedapp', function () {
    return view('wedType.wed&app');
});

Route::get('app', function () {
    return view('wedType.app');
});

Route::get('game', function () {
    return view('wedType.game');
});


Route::view('addproject', 'addproject');
Route::post('adddataproject', 'ListdataController@addproject');
// Route::post('adddataproject', 'ListdataController@addfileproject');
// Route::post('adddataproject', 'ListdataController@addproject')->name('addproject');
// Route::get('process', 'inputprojectController@addproject') ;
// Route::post('dataproject', 'ListdataController@dataproject');


Route::get('admin', function () {
    return view('homeadmin');
});


Route::get('teststap', function () {
    return view('teststap');
});

// Route::get('profile', function () {
//     return view('profileuser');
// });

// Route::get('logout', 'HomeController@index')->name('logout');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');


// โชว์ข้อมูล
Route::get('dataview', 'ListdataController@Datalist');
// ลบข้อมูล
Route::get('delete/{id}', 'ListdataController@destroy');

// Route::get('edit/{id}', 'DatauserController@edit');
Route::get('edit','DatauserController@index');
Route::get('edit/{id}','DatauserController@show');
Route::post('edit/{id}', 'DatauserController@edit');

// Route::get('profile','ProfileController@index');
// Route::get('profile/{id}','ProfileController@show');
// Route::post('profile/{id}', 'ProfileController@update');


Route::get('profile','ProfileController@edit')->name('edit');
Route::post('profile', 'ProfileController@update')->name('update');
Route::post('uploadimg', 'ProfileController@store')->name('store');
// Route::get('uploadimg', function () {
//     dd(request()->all());
// });


// Route::get('homeBD', 'ListdataController@Data');

// Route::view('edit', 'editdatauser');



// Route::get('update/{id}', 'DatauserController@update');

Route::view('adduser', 'createdatauser');
Route::post('adddata', 'ListdataController@adduser');

// Route::post('adduser', 'ListdataController@adduser');

// Route::view('adduser', 'createdatauser');

// Route::resource('adduser', 'DatauserController');

// Route::view('form', 'edittest');
// Route::get('update', 'updatedatauserController@update');


// Route::get('update/{id}', 'ListdataController@update');
