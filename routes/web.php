<?php
use App\Http\Controllers\PrincipalController;

Route::get('/chef', [PrincipalController::class, 'chef']);
Route::get('/card', [PrincipalController::class, 'card']);
Route::get('/profile', [PrincipalController::class, 'profile']);
Route::get('/sobre-nos', [PrincipalController::class, 'sobreNos'])->name('sobre');
Route::get('/contato', [PrincipalController::class, 'contato'])->name('contato');
Route::post('/contato/enviar', [PrincipalController::class, 'enviarContato'])->name('contato.enviar');
