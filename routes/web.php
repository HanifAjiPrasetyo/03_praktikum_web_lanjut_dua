<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('contents.home');
});

Route::prefix('product')->group(function () {
    Route::get('/marbel-edu-games', function () {
        return view('contents.product', [
            'title' => 'Marble - Educational Games'
        ]);
    });
    Route::get('/marbel-friends-kids-games', function () {
        return view('contents.product', [
            'title' => 'Marbel & Friends - Kids Games'
        ]);
    });
    Route::get('/riri-story-books', function () {
        return view('contents.product', [
            'title' => 'Riri - Story Books & Animations'
        ]);
    });
    Route::get('/kolak-kids-games', function () {
        return view('contents.product', [
            'title' => 'Kolak - Kids Songs'
        ]);
    });
});
Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        return view('contents.program', [
            'title' => 'Karir'
        ]);
    });
    Route::get('/magang', function () {
        return view('contents.product', [
            'title' => 'Magang'
        ]);
    });
    Route::get('/kunjungan-industri', function () {
        return view('contents.product', [
            'title' => 'Kunjungan Industri'
        ]);
    });
});

Route::get('/news', function () {
    return view('contents.news');
});

Route::get('/about-us', function () {
    return view('contents.about');
});
Route::get('/contact-us', function () {
    return view('contents.contact');
});

Route::post('/contact-us', function (Request $request) {
    echo '<h2>Name  : ' . $request->name . '<br>Email   : ' . $request->email . '<br>Message    : ' . $request->message . '</h2>';
});
