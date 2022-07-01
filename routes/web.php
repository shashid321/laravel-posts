<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::<HTTP_Methods>('<url>', <callback Fun>);
// get => fetch data
// post => insert data/form data add / create
// put, patch => Update Data
// delete => Detele Data
// request => Http Requests

// CRUD Operation
// C: Create, R: Read, U: Update, D: Delete


// Route::get('/', function () {
//     return view('home', ['title' => 'Home']);
// });
// Route::get('/about', function () {
//     $a = 5;
//     $b = 6;
//     $sum = $a+$b;
//     return view('about', ['title' => 'Home', 'sum'=> $sum]);
// });

// Route::post('/post', function(){
//     Requests
// });
// /post, /post/create, /post/store, /post/show, /post/delete, /post/update, post/edit


Route::get('/', [PostController::class, 'index'])->name('index');
Route::get('/add-post', [PostController::class, 'create'])->name('add-post');
Route::post('/add-post', [PostController::class, 'store'])->name('submit.post');
Route::get('/show/{id}', [PostController::class, 'show'])->name('post.show');
