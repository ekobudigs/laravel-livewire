<?php

use App\Http\Controllers\LogoutController;
use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Login;
use App\Livewire\Contact;
use App\Livewire\Users\Show;
use App\Livewire\Posts\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotifyLaravelController;

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


Route::middleware('auth')->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/about', About::class)->name('about');
    Route::get('/contact', Contact::class)->name('contact');
    Route::get('/posts', Index::class)->name('posts.index');


    Route::get('/users/{user}', Show::class)->name('users.name');
});

Route::get('/login', Login::class)->name('login')->middleware('guest');

Route::post('logout', LogoutController::class)->name('logout');
