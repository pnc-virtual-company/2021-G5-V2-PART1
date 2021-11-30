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
    public function signup(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'email' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:1999',
            'password' => 'required'
            // 'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:1999',
        ]);

        if(User::where('email',$request->email)->exists()){
            return response()->json(['message'=>'This mali '.$request->email.' is already exist!']);
        }
        else{
            $user = new User();

            if($request->image !== null){
                $user->image = $request->file('image')->hashName();
                $request->file('image')->store('public/images/users');
            }
            else{
                $img = 'https://cdn4.iconfinder.com/data/icons/glyphs/24/icons_user-256.png';
                $user->image = $img;
            }
            
            
            // create User
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->gender = $request->gender;
            $user->date_of_birth = $request->date_of_birth;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            
            $user->save();

            // Create Token
            // $token = $user->createToken('mytoken')->plainTextToken;
            return response()->json([
                'user'=>$user,
                // 'token' => $token,
                'message'=>"User created successfully"
            ]);
        }
    }
    // public function signout(Request $request)
    // {
    //     auth()->user()->tokens()->delete();
    //     return response()->json(['message' => 'User logged out']);
    // }
 

    public function login(Request $request){
        // Check email
        $user = User::where('email',$request->email)->first();

        // Check password
        if (!$user || !Hash::check($request->password, $user->password)){
            return response()->json(['message' => 'Bad login'], 401);
        }
        // Create Token
        // $token = $user->createToken('mytoken')->plainTextToken;

        return response()->json([
            'user' => $user,
            // 'token' => $token,
            'message'=>"User login successfully",
        ]);
    }
}

