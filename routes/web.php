<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationalController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebinarController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


Auth::routes();

Route::middleware(['checkRole:admin'])->group(function () {

    Route::get('/users', 'UserController@index')->name('users.index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\FrontEndController::class, 'index'])->name('users');

Route::resource('users', UserController::class);

Route::resource('abouts', AboutController::class);

Route::resource('skills', SkillController::class);

Route::resource('experiences', ExperienceController::class);

Route::resource('educationals', EducationalController::class);

Route::resource('webinars', WebinarController::class);

Route::resource('blogs', BlogController::class);

Route::resource('contacts', ContactController::class);

