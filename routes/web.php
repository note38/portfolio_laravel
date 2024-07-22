<?php
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/about', 'pages.about')->name('about');
// Route::get('/about', function () {
//     sleep(1);
//     return view('pages.about');
// })->middleware('cacheResponse:300')->name('about');

Route::view('/project', 'pages.project')->name('project');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/post', 'post')->name('Post');
Route::view('/create', 'project.create')->name('create');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/test', [ProjectController::class, 'show'])->middleware(['auth', 'verified'])->name('post');
Route::post('/create', [ProjectController::class, 'create'])->middleware(['auth', 'verified'])->name('create');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::view('/about', 'pages.about')->name('about');
});

require __DIR__.'/auth.php';
