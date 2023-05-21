<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
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
    return view('welcome');
});


Route::get('/', [AjaxController::class,'index'])->name('ajax.index');

Route::get('/ajaxlists', [AjaxController::class,'test'])->name('ajax.lists');

Route::post('/testpost', [AjaxController::class,'testpost'])->name('ajax.testpost');