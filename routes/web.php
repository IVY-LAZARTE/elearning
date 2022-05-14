<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TallerController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactanosController;
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
    return view('index');
});
Route::get('/auth.login', function () {
    return view('auth.login');
});
Route::get('/auth.register', function () {
    return view('auth.register');
});

Route::get('/talleres','App\Http\Controllers\TallerController@pagina');
Route::resource('/dash/crudtaller','App\Http\Controllers\TallerController');

Route::get('/seminarios', 'App\Http\Controllers\SeminarioController@pagina');

Route::resource('/dash/crudseminario','App\Http\Controllers\SeminarioController');

Route:: get('/cursos','App\Http\Controllers\CursoController@pagina');

Route:: resource('/dash/crudcurso','App\Http\Controllers\CursoController');

Route:: get('/videos','App\Http\Controllers\VideoController@pagina');
Route::resource('/dash/crudvideo','App\Http\Controllers\VideoController');
Route::get('/index', 'App\Http\Controllers\InicioController@index');

Route:: get('/manuales','App\Http\Controllers\ManualesController@index');

Route::get('/contactos',[ContactanosController::class,'index'])->name('contactanos.index');

Route::post('/contactos',[ContactanosController::class,'store'])->name('contactanos.store');


Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.crud');
})->name('dash');
