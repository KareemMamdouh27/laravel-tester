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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'Front\NewsController@index');

Route::get('/test', function()  {
    return 'test page';
}) -> name('kimo');

//============= Route Parameters ===================
 
// 1- Required Parameter

Route::get('/test2/{id}', function($id) {
    return $id;
});

// 2- Optional Parameter

Route::get('test3/{id?}', function () {
    return 'welcome';
});


// ======= Routing namespaces ==========

Route::namespace('Front')->group(function() {

    Route::get('/users', 'userController@index');
    Route::get('/logout', 'SecondController@index');

});


// Resources "Create component with crud funcs"

Route::resource('news','Front\NewsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/fillable','CrudController@getOffer');

// Route::group(['prefix' => 'offers'], function() {
//     Route::get('store','CrudController@store');
// });

Route::post('/store','CrudController@store') -> name('offers.store');

Route::get('/new-user', 'UserController@newUser');
Route::post('/add-user','UserController@addUser') -> name('post.user');

Route::get('/get-users', 'UserController@getUser');

Route::group([  
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function() {
    Route::get('/create','CrudController@create');
});

Route::get('/youtube','vedioEvent@getVedio');
