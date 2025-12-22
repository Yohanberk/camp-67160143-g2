<?php

use App\Http\Controllers\WorkshopFormController;

<<<<<<< Updated upstream
Route::get('/workshop-form', [WorkshopFormController::class, 'index']);
Route::post('/workshop-form', [WorkshopFormController::class, 'store']);
=======
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});
>>>>>>> Stashed changes
