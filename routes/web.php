<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

/*
! Pertemuan 1

Route::get('/hello', function () {
    echo "Selamat Datang";
});

Route::get('/about', function () {
    echo "NIM: 2141720114 <br> Nama: Agung Malik Al Qindy";
});
Route::get('/articles/{id}', function ($id) {
    return "Halaman artikel dengan id ".$id;
});
*/

/*
! Praktikum 2

Route::get('/', [PageController::class,'index']);

Route::get('/about', [PageController::class,'about']);

Route::get('/articles/{id}', [PageController::class, 'articles']);
*/


/*
! Praktikum 3

Route::get('/home', function () {
    echo "Ini adalah halaman home";
});

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        echo "Halaman daftar product dengan kategori marbel-edu-games";
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        echo "Halaman daftar product dengan kategori marbel-and-friends-kids-games";
    });
    Route::get('/riri-story-books', function () {
        echo "Halaman daftar product dengan kategori riri-story-books";
    });
    Route::get('/kolak-kids-songs', function () {
        echo "Halaman daftar product dengan kategori kolak-kids-songs";
    });
});

Route::get('/news/{param?}', function ($param='') {
    if ($param=='') {
        return 'Halaman daftar berita';
    }else{
        return 'Halaman berita dengan judul '.$param;
    }
});

Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        echo "Ini adalah halaman karir";
    });
    Route::get('/magang', function () {
        echo "Ini adalah halaman magang";
    });
    Route::get('/kunjungan-idustri', function () {
        echo "Ini adalah halaman kunjungan industri";
    });
});

Route::get('/about-us', function () {
    echo "Ini adalah halaman tentang kami";
});

Route::resource('contact-us',ContactController::class)->only([
    'show'
]);

*/
