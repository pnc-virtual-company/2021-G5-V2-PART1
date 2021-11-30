<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\EventResource;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Event::with(['category'])->latest()->get();
         
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
            'title' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png,gif,jfif|max:1999',
            'body'=>'required',
            'link_join'=>'required',
            'start_at'=>'required',
            'start_date'=>'required',
            'end_at'=>'required',
            'end_date'=>'required',
        ]);
        $event = new Event();

        if($request->image !== null){
            $event->image = $request->file('image')->hashName();
            $request->file('image')->store('public/images/events');
        }
        else{
            $img = 'https://cdn4.iconfinder.com/data/icons/glyphs/24/icons_user-256.png';
            $event->image = $img;
        }

        // Move image to storage

        // Add to database
        $event->user_id = $request->user_id;
        $event->category_id = $request->category_id;
        $event->title = $request->title;
        $event->body = $request->body;
        $event->city = $request->city;
        $event->link_join = $request->link_join;
        $event->start_at = $request->start_at;
        $event->start_date = $request->start_date;
        $event->end_at = $request->end_at;
        $event->end_date = $request->end_date;
        $event->save();

        return response()->json(['events'=>$event,'message' => 'Events created successfull'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search($title)
    {
        return Event::with('category')->where('title','like', '%'.$title.'%')->get();
    }
    
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Event::with(['category'])->findOrFail($id);
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
            'title' => 'required',
            'start_at' => 'required',
            'start_date' => 'required',
            'end_at' => 'required',
            'end_date' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,jfif|max:1999',
        ]);

        $event = Event::findOrFail($id);
        if($request->image !== null){
            // Move image to storage
            $event->image = $request->file('image')->hashName();
            $request->file('image')->store('public/images/events');
        }
        else{
            $img = 'https://cdn4.iconfinder.com/data/icons/glyphs/24/icons_user-256.png';
            $event->image = $img;
        }


        // Add to database
        $event->user_id = $request->user_id;
        $event->title = $request->title;
        $event->body = $request->body;
        $event->category_id = $request->category_id;
        $event->city = $request->city;
        $event->link_join = $request->link_join;
        $event->start_at = $request->start_at;
        $event->start_date = $request->start_date;
        $event->end_at = $request->end_at;
        $event->end_date = $request->end_date;

        $event->save();

        return response()->json(['events'=>$event,'message' => 'Events updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::destroy($id);
        if ($event == 1){
            return response()->json(['events'=>$event,'message' => 'deleted successfully'], 200);
        }else {
            return response()->json(['message' => 'Cannot deleted no id'], 404);
        }
    }
}
