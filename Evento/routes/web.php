<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
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


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/auth', function () {
    return view('auth.auth');})->name('auth');

    // Route::resource('dashboard', EventController::class);
    Route::get('/dashboard', [EventController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/', [EventController::class, 'welcome'])->name('welcome');
    Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('destroy');
    Route::post('/events', [EventController::class, 'store'])->name('addevent');
    Route::put('/events/{id}', [EventController::class, 'update'])->name('editevent');

    Route::get('/allevents', [EventController::class, 'show'])->name('allevents');
    Route::get('search/event', [EventController::class, 'searchEvents'])->name('search');
    Route::get('search/events', [EventController::class, 'showSearch'])->name('showsearch');

    Route::get('/categorie', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('categorie');
    Route::resource('categorie', CategorieController::class);

 Route::patch('/event/accept/{event}', [EventController::class, 'accept'])->name('accept');
Route::patch('/event/refuse/{event}', [EventController::class, 'refuse'])->name('refuse');


require __DIR__.'/auth.php';
