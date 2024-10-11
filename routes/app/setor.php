<?php

Route::get('setor/create', [\App\Http\Controllers\App\Setor\SetorCreateController::class, 'create'])->name('setor.create');
Route::post('setor', [\App\Http\Controllers\App\Setor\SetorStoreController::class, 'store'])->name('setor.store');
Route::get('setor', [\App\Http\Controllers\App\Setor\SetorIndexController::class, 'index'])->name('setor.index');
Route::delete('setor/{uuid}', [\App\Http\Controllers\App\Setor\SetorDeleteController::class, 'delete'])->name('setor.delete');
Route::get('setor/{uuid}/edit', [\App\Http\Controllers\App\Setor\SetorEditController::class, 'edit'])->name('setor.edit');
Route::put('setor/{uuid}/update', [\App\Http\Controllers\App\Setor\SetorUpdateController::class, 'update'])->name('setor.update');
