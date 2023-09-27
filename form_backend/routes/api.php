<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/message', function(){
    return response()->json([
        'message' => 'Hello world',
        'status_code' => 200
    ]);
});