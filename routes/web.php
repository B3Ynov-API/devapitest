<?php

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SpecyController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\EnclosureController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});


Route::get('/bonjour/{firstname}/{numero}/{lastname?}', [HomeController::class, 'index'])
->where('numero', '[0-9]+')
->name('bonjour');

Route::get('/animal', [AnimalController::class, 'index'])->name('animal.index');

Route::get('/animal/show/{animal}', [AnimalController::class, 'show'])
->where('animal', '[0-9]+')
->name('animal.show');

Route::get('/animal/create', [AnimalController::class, 'create'])
->name('animal.create');
Route::post('/animal', [AnimalController::class, 'store'])
->name('animal.store');

Route::get('/animal/edit/{animal}', [AnimalController::class, 'edit'])
->name('animal.edit');

Route::post('/animal/update/{animal}', [AnimalController::class, 'update'])
->name('animal.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Utilise le middleware auth pour autoriser l'accès à certaines route uniquement si l'utilisateur est connecté
Route::middleware([
    'auth',
    'isAdmin'
])->group(function(){
    Route::get('test', [HomeController::class, 'test']);
    Route::get('animal/add-specy/{animal}/{specy}', [AnimalController::class, 'add_specy']);
});

Route::get('enclosures', [EnclosureController::class, 'index']);
Route::get('enclosures/show/{enclosure}', [EnclosureController::class, 'show'])
    ->name('enclosure.show')
    ->where('enclosure', '[0-9]+');

Route::post('enclosure/update/{enclosure}', [EnclosureController::class, 'update'])
    ->name('enclosure.update')
    ->where('enclosure', '[0-9]+');