<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        //
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function signup(Request $request)
    {
        //
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'email' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,jfif|max:1999',
            'password' => 'required'
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
            return response()->json([
                'user'=>$user,
                'message'=>"User created successfully"
            ]);
        }
    }
    public function signin(Request $request){
        // Check email
        $user = User::where('email',$request->email)->first();
        // Check password
        if (!$user || !Hash::check($request->password, $user->password)){
            
            return response()->json(["message"=>"Email or password incorrect!"], 401);
        }
      
        // Create Token
        // $token = $user->createToken('mytoken')->plainTextToken; 
        return response()->json([
            'user' => $user,
            // 'token' => $token,
            'message'=>"User login successfully",
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return User::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user =  User::findOrFail($id);
            // create User
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->gender = $request->gender;
            $user->date_of_birth = $request->date_of_birth;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            
            $user->save();

         
            return response()->json([
                'user'=>$user,
                'message'=>"User updated successfully"
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::destroy($id);
       
        if ($user === 1) {
            return response()->json(['message' => 'deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Cannot deleted no id'], 404);
        }
    }
}
