<?php

Route::get('/equipe/show/{uuid}', [\App\Http\Controllers\App\Equipe\EquipeShowController::class, 'show'])->name('equipe.show');
Route::get('/equipe/create', [\App\Http\Controllers\App\Equipe\EquipeCreateController::class, 'create'])->name('equipe.create');
Route::put('/equipe/{uuid}', [\App\Http\Controllers\App\Equipe\EquipeUpdateController::class, 'update'])->name('equipe.update');
Route::get('/equipe', [\App\Http\Controllers\App\Equipe\EquipeIndexController::class, 'index'])->name('equipe.index');
Route::get('/equipe/edit/{equipe}', [\App\Http\Controllers\App\Equipe\EquipeEditController::class, 'edit'])->name('equipe.edit');
Route::post('/equipe', [\App\Http\Controllers\App\Equipe\EquipeStoreController::class, 'store'])->name('equipe.store');
