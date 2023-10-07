<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
    public function create(Request $request){
        $users = new User();
        $html_return = new User();

        $users->name = $request->input('name');
        $html_return->name = $users->name;
        $users->email = $request->input('email');
        $html_return->email = $users->email;
        $users->password = $request->input('password');
        $users->cpf = $request->input('cpf');
        $html_return->cpf = $users->cpf;

        $users->save();
        return response()->json($html_return);
    }
}
