<?php

use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::delete('/supports/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');
/*Route::put('/supports/{id}',  function (Request $request)  {
   dd($request->all());
})->name('supports.update');*/
 Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');


Route::get('/supports/edit/{id}', [SupportController::class, 'edit'])->name('supports.edit');
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');
Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');



Route::get('/', function () {
    return view('welcome');
});
