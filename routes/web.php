<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CekilisController;

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
Route::get('/', function () {
    DB::select('select * from users');
    return view('anasayfa');
});

Route::post('/cekilis-sayfasi', [CekilisController::class, 'cekilisSayfasi']) -> name('cekilisSayfasi');
Route::get('/cekilis-sonuc', [CekilisController::class, 'KazananSec']) -> name('KazananSec');


