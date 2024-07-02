<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            $user = Auth::user();
//            $token = $user->createToken('token')->plainTextToken;
            return redirect('/profile');
        }else{
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
            return redirect('/login');
        }

    }

    public function signup(Request $request)
    {
        $v = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'number' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'adress' => 'required|string|max:255',
            'password' => 'required|string|min:1|confirmed',
        ]);

        if($v->fails()){
            return response()->json(['errors' => $v->errors()], 422);
        }

        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'lastname' => $request->lastname,
            'number' => $request->number,
            'city' => $request->city,
            'adress' => $request->adress,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/profile');
    }

    public function profile(){
        $user = Auth::user();

        return view('pages/profile', ['user' => $user]);
    }

    public function logout(){
        Auth::guard('web')->logout();

        return redirect('/');
    }
}
