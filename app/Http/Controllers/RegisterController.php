<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view ('register.index', [
            "title" => 'Register',
            "active" => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request-> validate([
            'name' => 'required|max:255',                                   // 1st Way
            'username' => ['required', 'min:3', 'max:255', 'unique:users'], // 2nd Way (array)
            'email' => 'required|email:dns|unique:users',       // should be unique in users table
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);    // 1st Way
        $validatedData['password'] = Hash::make($validatedData['password']);   // 2nd Way

        User::create($validatedData);

        //$request->session()->flash('success', 'Successfully Registered! Please Login');

        return redirect('/login')->with('success', 'Successfully Registered! Please Login');
    }
}
