<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SchoollistController;
use App\Http\Controllers\HeldEventController;
use App\Http\Controllers\HeaderController;
use App\Models\School;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/held-events', function () {
    return view('event-list');
})->name('/held-events');

Route::get('/schools', [SchoolController::class, 'index'])->name('schools');

Route::get('/schools/{id}', [SchoolController::class, 'show'])->name('school.show');

Route::get('/schools/{id}/booking-creation', function (string $id) {
    return view('school-book', ['school' => School::find($id)]);
})->name('school-book-creation');
Route::get('/', [HeaderController::class, 'index'])->name('/');

Route::post('/schools/{id}/booking-confirmation', function (Request $req, string $id) {
    return view('school-book-confirm', ['school' => School::find($id), 'params' => $req->request->all()]);
})->name('school-book-confirmation');

Route::get('/question-of-second', function () {
    return view('reccomend/home-2');
})->name('question-of-second');

Route::get('/question-of-third', function () {
    return view('reccomend/home-3');
})->name('question-of-third');

Route::get('/question-of-fourth', function () {
    return view('reccomend/home-4');
})->name('question-of-fourth');

Route::get('/question-of-fifth', function () {
    return view('reccomend/home-5');
})->name('question-of-fifth');

Route::get('/school-details/0', function () {
    return view('reccomend/reccomend-school-detail');
})->name('school-details/0');

Route::post('/schools/{id}/booking-completion', [BookingController::class, 'store'])->name('school-book-completion');

Route::get('/held-events', [HeldEventController::class, 'index'])->name('held-events');

Route::get('/articles/{id}', function (string $id) {
    return view('articles/' . $id);
})->name('article');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/post/index', [PostController::class, 'index'])->name('post.index');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/post/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::patch('/post/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');

    Route::get('/myposts', [PostController::class, 'myPosts'])->name('myposts');
});

require __DIR__.'/auth.php';

