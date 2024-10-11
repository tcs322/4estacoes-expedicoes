<?php

Route::get('expedicao', [App\Http\Controllers\App\Expedicao\ExpedicaoIndexController::class, 'index'])->name('expedicao.index');
Route::get('expedicao/create', [App\Http\Controllers\App\Expedicao\ExpedicaoCreateController::class, 'create'])->name('expedicao.create');