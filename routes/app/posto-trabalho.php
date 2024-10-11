<?php

Route::get('posto-trabalho/create', [\App\Http\Controllers\App\PostoTrabalho\PostoTrabalhoCreateController::class, 'create'])->name('posto-trabalho.create');
Route::post('posto-trabalho/', [\App\Http\Controllers\App\PostoTrabalho\PostoTrabalhoStoreController::class, 'store'])->name('posto-trabalho.store');
Route::get('posto-trabalho/', [\App\Http\Controllers\App\PostoTrabalho\PostoTrabalhoIndexController::class, 'index'])->name('posto-trabalho.index');
Route::delete('posto-trabalho/{uuid}', [\App\Http\Controllers\App\PostoTrabalho\PostoTrabalhoDeleteController::class, 'delete'])->name('posto-trabalho.delete');
Route::get('posto-trabalho/{uuid}/edit', [\App\Http\Controllers\App\PostoTrabalho\PostoTrabalhoEditController::class, 'edit'])->name('posto-trabalho.edit');
Route::put('posto-trabalho/{uuid}/update', [\App\Http\Controllers\App\PostoTrabalho\PostoTrabalhoUpdateController::class, 'update'])->name('posto-trabalho.update');
