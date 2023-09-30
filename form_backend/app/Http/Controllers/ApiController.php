<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
    public function create(Request $request){
        $users = new User();

        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->cpf = $request->input('cpf');

        $users->save();
        return response()->json($users);
    }
}
