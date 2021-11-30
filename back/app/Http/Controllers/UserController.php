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
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:1999',
            'password' => 'required'
        ]);

        if(User::where('email',$request->email)->exists()){
            return response()->json(['message'=>'This mali '.$request->email.' is already exist!']);
        }
        else{
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

            #1|w9z9S885Fbo5XgGn2hx68XYvl7HyTiB6CPNPEvPE : aem
            #2|PS1Cov8xwU17j104zPDQuN7T5pmHleHJr9ibDN17 : thin
            #3|3lD2L6gQqMNjchvbuXcgg3NQhvnz0ZfA8Gc09PQh : phearak
            #4|2k0zXnFB07DrFZ3zhRGuk9f5i7VRjKxmXZQdxWLF : sophorn
            #6|aso9ajaXRFcV6YM2sfDPhFpKITnmi0i9kYakmSre : chum
            // Create Token
            $token = $user->createToken('mytoken')->plainTextToken;
           
            return response()->json([
                'user'=>$user,
                'token' => $token,
                'message'=>"User created successfully"
            ]);
        }
    }
    public function signout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return response()->json(['message' => 'User logged out']);
    }
 

    public function login(Request $request){
        // Check email
        $user = User::where('email',$request->email)->first();

        // Check password
        if (!$user || !Hash::check($request->password, $user->password)){
            return response()->json(['message' => 'Bad login', 'user'=>$user], 401);
        }
        // Create Token
        $token = $user->createToken('mytoken')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token,
            'message'=>"User login successfully",
        ]);
    }
}

