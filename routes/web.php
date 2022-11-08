<?php

use App\Http\Controllers\Excel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\rentalController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\DetailUserController;
use App\Http\Controllers\detailRentalController;

use App\Models\detail_rental;
use App\Models\detail_user;

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

Route::get('usertemplate', function () {
    return view('usertemplate');
});

// Route::get('contact', function () {
//     return view('contact');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::view('/mobil', 'page/mobil/mobil');

Route::view('index', 'index');
Route::view('about', 'about');
Route::view('car', 'car');
Route::view('pricing', 'pricing');
Route::view('contact', 'contact');





Route::get('/rentaltemplate', [MobilController::class, 'showmobilrental']);



// admin
// Route::middleware(['auth', 'admin'])->group(function () {
// });

// rental
// Route::middleware(['auth', 'rental'])->group(function () {

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

//transaksi
Route::get('/page/transaksi/transaksi/{id}', [TransaksiController::class, 'index']);
Route::post('/transaksi', [TransaksiController::class, 'store']);


Route::get('/download', [MobilController::class, 'export']);

// });

// user
Route::middleware(['auth', 'admin'])->group(function () {
    // user
    Route::resource('page/user', UserController::class);
    Route::get('deleteuser/{id}', [UserController::class, 'destroy'])->name('deleteuser');
});

Route::middleware(['auth', 'rental'])->group(function () {
    // mobill
    // Route::get('/mobil', [MobilController::class, 'index']);
    // Route::get('/create_mobil', [MobilController::class, 'create']);
    // Route::post('/mobil', [MobilController::class, 'store']);
    // Route::get('/page/mobil/edit_mobil/{id}', [MobilController::class, 'edit']);
    // Route::get('/page/mobil/edit_image/{id}', [MobilController::class, 'editImage']);
    // Route::delete('/mobil/{id}', [MobilController::class, 'destroy']); //mengarah ke function destroy di MobilController
    // Route::resource('mobil', MobilController::class); //update detail mobil
    // Route::put('/page/mobil/mobil/{id}', [MobilController::class, 'updateImage']);
    // Route::get('/page/mobil/detail_mobil/{id}', [MobilController::class, 'detailMobil']);
    // Route::get('/download', [MobilController::class, 'export']);
    Route::get('midtrans', [MobilController::class, 'midtrans']);
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

    Route::get('midtan', function () {
        return view('midtrans');
    });


    // rental
    Route::resource('rental', rentalController::class);
    Route::get('deleterental/{id}', [RentalController::class, 'destroy'])->name('deleterental');
    //   detail rental
    Route::resource('detail_rental', detailRentalController::class);
    Route::get('deletedetail/{id}', [detailRentalController::class, 'destroy'])->name('deletedetail');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // rentalldetail
    $data = detail_rental::all();
    Route::view('detailrental', 'page.detailrental.detailrental', compact('data'));
});

Route::middleware(['auth', 'user'])->group(function () {
    // detailuser
    Route::resource('page/detailuser', DetailUserController::class);
    Route::get('deletdetailuser/{id}', [DetailUserController::class, 'destroy'])->name('deletdetailuser');
    Route::get('wilayah', [DetailUserController::class, 'wilayah']);
    Route::resource('contact', ContactController::class);
});


Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});





//  // detailuser
//  $data = detail_user::all();
//  Route::view('/detailuser', 'page/detailuser/tabeluser', compact('data'));

    // Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
    //Hilmi
    //CRUD Mobil
    // Route::get('/mobil', [MobilController::class, 'index']);
    // Route::get('/create_mobil', [MobilController::class, 'create']);
    // Route::post('/mobil', [MobilController::class, 'store']);
    // Route::get('/page/mobil/edit_mobil/{id}', [MobilController::class, 'edit']);
    // Route::get('/page/mobil/edit_image/{id}', [MobilController::class, 'editImage']);
    // Route::delete('/mobil/{id}', [MobilController::class, 'destroy']); //mengarah ke function destroy di MobilController
// Route::resource('mobil', MobilController::class); //update detail mobil
// Route::put('/page/mobil/mobil/{id}', [MobilController::class, 'updateImage']);
// Route::get('/page/mobil/detail_mobil/{id}', [MobilController::class, 'detailMobil']);
// Route::get('/download', [MobilController::class, 'export']);


// Route::resource('page/user', UserController::class);
// Route::get('deleteuser/{id}', [UserController::class, 'destroy'])->name('deleteuser');
// Route::resource('page/detailuser', DetailUserController::class);
// Route::get('deletdetailuser/{id}', [DetailUserController::class, 'destroy'])->name('deletdetailuser');
// Route::get('wilayah', [DetailUserController::class, 'wilayah']);
// Route::get('ajax', function(){
//     return view('page/detailuser.ajax');
// });
    // Route::get('/mobil', [MobilController::class, 'index']);
    // Route::get('/create_mobil', [MobilController::class, 'create']);
    // Route::post('/mobil', [MobilController::class, 'store']);
    // Route::get('/page/mobil/edit_mobil/{id}', [MobilController::class, 'edit']);
    // Route::get('/page/mobil/edit_image/{id}', [MobilController::class, 'editImage']);
    // Route::delete('/mobil/{id}', [MobilController::class, 'destroy']); //mengarah ke function destroy di MobilController
    // Route::resource('mobil', MobilController::class); //update detail mobil
    // Route::put('/page/mobil/mobil/{id}', [MobilController::class, 'updateImage']);
    // Route::get('/page/mobil/detail_mobil/{id}', [MobilController::class, 'detailMobil']);
    // Route::get('/download', [MobilController::class, 'export']);
    //
