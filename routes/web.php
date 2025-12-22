<?php

use App\Http\Controllers\WorkshopFormController;

Route::get('/workshop-form', [WorkshopFormController::class, 'index']);
Route::post('/workshop-form', [WorkshopFormController::class, 'store']);
