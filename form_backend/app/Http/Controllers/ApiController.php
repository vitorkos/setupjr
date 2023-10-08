<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class ApiController extends Controller
{
    public function create(Request $request){
        $rules =[
            'name' => 'required|string|regex:/^[A-Za-z\s]+$/|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'cpf' => 'required|cpf|unique:users|min:11|max:14'
        ];


        $users = new User();

        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->cpf = $request->input('cpf');

        $users->save();
        return response()->json([
            'name'=>$users->name,
            'email'=>$users->email,
            'cpf'=>$users->cpf
        ]);
    }
}
