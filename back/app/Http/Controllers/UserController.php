<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function users(){
        return User::all();
    }
    public function show($id){
        return User::findOrFail($id);
    }
        # code...
        #1|cZrbN7jwIdDzouwEkX9dQp6U2RA6aqiUake7ZEY9
    public function signup(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'email' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:1999',
            'password' => 'required'
        ]);

        // Move image to storage
        $request->file('image')->store('public/images/users');
        // create User
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->gender = $request->gender;
        $user->date_of_birth = $request->date_of_birth;
        $user->image = $request->file('image')->hashName();;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();
        
        // Create Token
        $token = $user->createToken('mytoken')->plainTextToken;
        $user = User::where('email',$request->email)->first();
        return response()->json([
            'user' => $user,
            'token' => $token,
            'message'=>"User created"
        ]);
    }
    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return response()->json(['message' => 'User logged out']);
    }
 

    public function login(Request $request){
        // Check email
        $user = User::where('email',$request->email)->first();

        // Check password
        if (!$user || !Hash::check($request->password, $user->password)){
            return response()->json(['message' => 'Bad login'], 401);
        }
        // Create Token
        $token = $user->createToken('mytoken')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token,
            'message'=>"Loing successfully"
        ]);
    }

    
}

