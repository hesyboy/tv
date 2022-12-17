<?php

use App\Http\Controllers\Panel\PanelController;
use App\Http\Controllers\Site\SiteController;
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

// Route::get('/admin', function () {
//     return view('admin.layout.master');
// });


Route::prefix('/')->group(function () {

    Route::get('/',[SiteController::class,'index'])->name('site.index');

    Route::prefix('admin')->group(function () {
        Route::get('/', function () {
            return view('admin.layout.master');
        })->name('admin.index');
    });


    Route::prefix('panel')->namespace('Panel')->group(function(){
        Route::get('/',[PanelController::class,'index'])->name('panel.index');
        Route::get('/history',[PanelController::class,'history'])->name('panel.history');
        Route::get('/wallet',[PanelController::class,'wallet'])->name('panel.wallet');

    });
});


