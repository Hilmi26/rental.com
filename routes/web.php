<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\detailRentalController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DetailUserController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\Excel;
use App\Http\Controllers\rentalController;

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

Route::get('index', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('car', function () {
    return view('car');
});

Route::get('listing', function () {
    return view('listing');
});

Route::get('main', function () {
    return view('main');
});

Route::get('pricing', function () {
    return view('pricing');
});

Route::get('services', function () {
    return view('services');
});

Route::get('contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('page/mobil/', function () {
//     return view('page/mobil/mobil');
// });


//Hilmi
//CRUD Mobil
Route::get('/mobil', [MobilController::class, 'index']);
Route::get('/create_mobil', [MobilController::class, 'create']);
Route::post('/mobil', [MobilController::class, 'store']);
Route::get('/page/mobil/edit_mobil/{id}', [MobilController::class, 'edit']);
Route::get('/page/mobil/edit_image/{id}', [MobilController::class, 'editImage']);
Route::delete('/mobil/{id}', [MobilController::class, 'destroy']); //mengarah ke function destroy di MobilController
Route::resource('mobil', MobilController::class); //update detail mobil
Route::put('/page/mobil/mobil/{id}', [MobilController::class, 'updateImage']);

Route::get('/page/mobil/detail_mobil/{id}', [MobilController::class, 'detailMobil']);

Route::get('/download', [MobilController::class, 'export']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route:: get ('/page/user', [UserController::class, 'index']) ;
// Route::get('/page/user', [UserController::class,'index']);
Route::resource('page/user', UserController::class);
Route::get('deleteuser/{id}', [UserController::class, 'destroy'])->name('deleteuser');

Route::resource('page/detailuser', DetailUserController::class);

Route::resource('rental', rentalController::class);
Route::resource('detail_rental', detailRentalController::class);
Route::get('deleterental/{id}', [rentalController::class, 'destroy'])->name('deleterental');
Route::get('deletedetail/{id}', [detailRentalController::class, 'destroy'])->name('deletedetail');

Route::resource('contact', ContactController::class);Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});
