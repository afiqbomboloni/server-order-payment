<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WebhookController;

Route::post('/orders', [OrderController::class, 'create']);
Route::get('/orders', [OrderController::class, 'index']);

Route::post('/webhook', [WebhookController::class, 'midtransHandler']);

