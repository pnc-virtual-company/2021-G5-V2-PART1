<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joins;

class JoninsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Joins::with(['user','events'])->latest()->get();
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
        $join = new Joins();
        $join->user_id = $request->user_id;
        $join->events_id= $request->events_id;
        $join->save();

        return response()->json(['message'=>'joined', $this->index()],201);
    }

    public function destroy($id)
    {
        //
        $join = Joins::destroy($id);
       
        if ($join === 1) {
            return response()->json(['messate'=>'unjoin', 'events'=>$this->index()], 200);
        } else {
            return response()->json(['message' => 'Cannot deleted no id'], 404);
        }
    }
}
