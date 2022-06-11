<?php
use App\Http\Controllers\peopleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/about',[HomesController::class,'about'])->name('about');
Route::get('/people/all',[peopleController::class,'list'])->name('people.list');
Route::get('/people/details/info',[peopleController::class,'details'])->name('people.details');
Route::get('/people/create',[peopleController::class,'create'])->name('people.create');
Route::post('/people/create',[peopleController::class,'createSubmit'])->name('people.create.submit');
Route::view('login', 'login');