<?php

Route::get('departamento/create', [\App\Http\Controllers\App\Departamento\DepartamentoCreateController::class, 'create'])->name('departamento.create');
Route::post('departamento/', [\App\Http\Controllers\App\Departamento\DepartamentoStoreController::class, 'store'])->name('departamento.store');
Route::get('departamento/', [\App\Http\Controllers\App\Departamento\DepartamentoIndexController::class, 'index'])->name('departamento.index');
Route::delete('departamento/{uuid}', [\App\Http\Controllers\App\Departamento\DepartamentoDeleteController::class, 'delete'])->name('departamento.delete');
Route::get('departamento/{uuid}/edit', [\App\Http\Controllers\App\Departamento\DepartamentoEditController::class, 'edit'])->name('departamento.edit');
Route::put('departamento/{uuid}/update', [\App\Http\Controllers\App\Departamento\DepartamentoUpdateController::class, 'update'])->name('departamento.update');
