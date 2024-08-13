<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserContoller;
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

Route::get('/', function () {
    $posts = Post::all();
    return view('home' ,['posts' => $posts]);
});

// Route::post('/register' , function(){
//     return "<h1>Thank You!</h1>";
// });

Route::post('/register' , [UserContoller::class , 'register']);
Route::post('/logout' , [UserContoller::class , 'logout']);
Route::post('/login' , [UserContoller::class , 'login']);

Route::post('/create-post' , [PostController::class , 'createpost']);