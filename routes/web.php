<?php

use App\Http\Controllers\Panel\PanelController;
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

Route::get('/',[SiteController::class,'index'])->name('site.index');


//panel

Route::prefix('panel')->namespace('Panel')->group(function(){
    Route::get('/',[PanelController::class,'index'])->name('panel.index');
    Route::get('/history',[PanelController::class,'history'])->name('panel.history');
    Route::get('/wallet',[PanelController::class,'wallet'])->name('panel.wallet');

});

Route::get('/admin',[PanelController::class,'index'])->name('admin.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
