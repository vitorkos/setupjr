<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/message-test', function(){
    return response()->json([
        'message' => 'Hello world',
        'status_code' => 200
    ]);
});

Route::post('/user-signup', [ApiController::class, 'create']);