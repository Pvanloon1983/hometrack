<?php

use App\Http\Controllers\Api\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'application' => 'HomeTrack',
        'version' => 'v1',
    ]);
});

Route::post('/items', [ItemController::class, 'store']);
