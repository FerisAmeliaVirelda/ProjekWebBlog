<?php

use App\Http\Controllers\AmelController;
use App\Http\Controllers\TrendingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/nama', function () {
    return 'Feris Amelia Virelda';
});

Route::get('/guru', function () {
    return view('data_guru');
});

Route::get('/siswa', function () {
    return view('data_siswa');
});

Route::resource('/amelias', \App\Http\Controllers\AmelController::class); 
Route::get('/tampil', [AmelController::class,'tampil']);
Route::get('/tampil/search', [AmelController::class,'search']);

//navbar
Route::get('/', function () {
    return view('home/index');
});
Route::get('/trending', [TrendingController::class,'trending']);
Route::get('/gadget', function () {
    return view('gadget/index');
});
Route::get('/futuretechnology', function () {
    return view('ft/index');
});

//MORE
//home
Route::get('/stiker', function () {
    return view('more/stiker');
});
Route::get('/docs', function () {
    return view('more/docs');
});
Route::get('/kereta', function () {
    return view('more/kereta');
});
Route::get('/yellow', function () {
    return view('more/yellow');
});
Route::get('/halodoc', function () {
    return view('more/halodoc');
});
Route::get('/mark', function () {
    return view('more/mark');
});
//trending
Route::get('/disney', function () {
    return view('more/disney');
});
Route::get('/fitur', function () {
    return view('more/fitur');
});
//gadget
Route::get('/cp', function () {
    return view('more/coldplay');
});
Route::get('/android', function () {
    return view('more/android');
});
Route::get('/twt', function () {
    return view('more/twt');
});
//ft
Route::get('/ai', function () {
    return view('more/kembangkanai');
});

//about
Route::get('/about', function () {
    return view('about/index');
});
// Route::get('/admin', function () {
//     return view('admin');
// });


//LOGIN DAN REGISTER
Route::group(['middleware' => "guest"],function () {
    Route::get('/register', [AuthController::class,'register'])->name('register');
    Route::post('/register', [AuthController::class,'registerPost'])->name('register.store');
    Route::get('/login', [AuthController::class,'login'])->name('login');
    Route::post('/login', [AuthController::class,'loginPost'])->name('login.store');
});
Route::group(['middleware' => "auth"],function () {
    Route::get('/home', [HomeController::class,'index']);
    Route::delete('/logout', [AuthController::class,'logout'])->name('logout');
});




