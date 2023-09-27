<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/message_test', function(){
    return response()->json([
        'message' => 'Hello world',
        'status_code' => 200
    ]);
});

Route::post('/user_signup_test', function(){
    return response()->json([
        'name' => 'joãozinho157',
        'email' => 'vidaloka123@yahoo.com',
        'senha' => 'senha',
        'status_code' => 200
    ]);
});