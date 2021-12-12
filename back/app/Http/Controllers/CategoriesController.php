<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Categories::with('events')->latest()->get();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            
        ]);
        
        if(Categories::where('name', $request->name)->exists()){
            return response()->json(['message' => 'The category name ' . $request->name . ' is already exist!']);
        }
        else{
            $cate = new Categories();
            if($request->image !== null){
                $cate->image = $request->file('image')->hashName();
                $request->file('image')->store('public/images/categories');
            }
            else{
                $img = 'http://ocdn.eu/images/pulscms/MmI7MDA_/be72545f8adae32d3d98ce5b6755ae85.jpg';
                $cate->image = $img;
            }
            
            $cate->name = $request->name;
            $cate->save();
    
            return response()->json([ 'message'=>'Categories created successfully!', 'categories'=>$this->index()],201);

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
        //
        return Categories::findOrFail($id);
    }
    function search($name)
    {
        $result = Categories::where('name', 'LIKE', '%'. $name. '%')->get();
        if(count($result)){
         return Response()->json($result);
        }
        else
        {
        return response()->json(['Result' => 'No Data not found'], 404);
      }
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
        $cate = Categories::findOrFail($id);
        $cate->name = $request->name;
        $cate->save();

        return response()->json([ 'message'=>'Categories updated successfully!', 'categories'=> $this],200);

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
        $cate = Categories::destroy($id);
       
        if ($cate === 1) {
            return response()->json(['message' => 'deleted successfully','categories'=>$this->index()], 200);
        } else {
            return response()->json(['message' => 'Cannot deleted no id'], 404);
        }
    }
}
