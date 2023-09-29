<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/message-test', function(){
    return response()->json([
        'message' => 'Hello world',
        'status_code' => 200
    ]);
});

Route::post('/user-sign', function (Request $request) {
    $request->input('user');
    return $request;
});