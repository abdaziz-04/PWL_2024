<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserProfileController;
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


Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

// Route::get('about', function () {
//     return '2241720088 Abdul Aziz';
// });

// Route::get('/user/{name}', function ($name) {
//     return 'Nama Saya ' . $name;
// });

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

// Route::get('article/{id}', function ($id) {
//     return 'Halaman artikel dengan id ' . $id;
// });

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

// Route::get('/user/profile', function () {
// })->name('profile');

// Route::get('/user/profile', function () {
//     // 
// })->name('profile');
// Route::get(
//     '/user/profile',
//     [UserProfileController::class, 'show']
// )->name('profile');
// // Generating URLs... 
// $url = route('profile');
// // Generating Redirects... 
// return redirect()->route('profile');

Route::get('/hello', [WelcomeController::class, 'hello']);

// Tugas Controller
Route::get('/', [PageController::class, 'index']);
Route::get('about', [PageController::class, 'about']);
Route::get('article/{id}', [PageController::class, 'articles']);
