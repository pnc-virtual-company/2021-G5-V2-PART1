<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Category::with('events')->latest()->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,jfif|max:1999',
        ]);
        $category = new Category();
        // check exist already category name
        if (Category::where('name', $request->name)->exists()) {
            return response()->json(['message' => 'The category name ' . $request->name . ' is already exist!']);
        } else {
            if($request->image !== null){
                $category->image = $request->file('image')->hashName();
                $request->file('image')->store('public/images/categories');
            }
            else{
                $img = 'https://cdn4.iconfinder.com/data/icons/glyphs/24/icons_user-256.png';
                $category->image = $img;
            }
    
            // Add to database
            $category->name = $request->name;
            
            $category->save();
            // Move image to storage
    
            return response()->json(['category' => $category,'message' => 'categories created successfully'], 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Category::with('events')->findOrFail($id);
    }
    /**
     * search the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return Category::with('events')->where('name', 'like', '%' . $name . '%')->get();
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
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,jfif|max:1999'
        ]);
        
        $category = Category::findOrFail($id);
        if($request->image !== null){
            $category->image = $request->file('image')->hashName();
            $request->file('image')->store('public/images/categories');
        }
        else{
            $img = 'https://cdn4.iconfinder.com/data/icons/glyphs/24/icons_user-256.png';
            $category->image = $img;
        }

        // Add to database
        $category->name = $request->name;
        $category->save();

        return response()->json(['category' => $category,'message' => 'categories updated successfully'], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::destroy($id);
        if ($category == 1) {
            return response()->json(['message' => 'deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Cannot deleted no id'], 404);
        }
    }
}
