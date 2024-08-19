<?php
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileAvatarController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile', [ProfileAvatarController::class, 'store'])->name('store.avatar');
    // PROJECTS
    Route::get('/project', [ProjectController::class, 'show'])->name('dash_project');
    Route::post('/store', [ProjectController::class, 'store'])->name('store_project');
    Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::patch('/update/{id}', [ProjectController::class, 'update'])->name('project.update');
    Route::delete('/delete/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');
});

require __DIR__.'/auth.php';
