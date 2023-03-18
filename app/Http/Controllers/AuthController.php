<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register (Request $request){
        $fields = $request->validate([
            'name' => 'required|string|unique:users,name',
            'password' => 'required|string',
            'email'=> 'required|string|unique:users,email'
        ]);
        $userObject = User::create([
            'name'=> $fields['name'],
            'password' => bcrypt($fields['password']),
            'email' => $fields['email']
        ]);
        $token = $userObject->createToken('token')->plainTextToken;

        $response=[
            'user'=> $userObject,
            'token' => $token
        ];
        return response($response, 201);
    }
}
