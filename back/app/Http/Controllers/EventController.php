<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return Event::orderBy('event_id', 'desc')->get();
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
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:1999',
        ]);

        // Move image to storage
        $request->file('image')->store('public/images/events');

        // Add to database
        $event = new Event();
        $event->user_id = $request->user_id;
        $event->title = $request->title;
        $event->body = $request->body;
        $event->category = $request->category;
        $event->city = $request->city;
        $event->link_join = $request->link_join;
        $event->start_at = $request->start_at;
        $event->start_date = $request->start_date;
        $event->end_at = $request->end_at;
        $event->end_date = $request->end_date;
        $event->image = $request->file('image')->hashName();
        $event->save();

        return response()->json(['message' => 'created'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return event::with('user')->findOrFail($id);
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
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:1999',
        ]);

        // Move image to storage
        $request->file('image')->store('public/images/events');

        // Add to database
        $event = Event::findOrFail($id);
        $event->user_id = $request->user_id;
        $event->title = $request->title;
        $event->body = $request->body;
        $event->category = $request->category;
        $event->city = $request->city;
        $event->link_join = $request->link_join;
        $event->start_at = $request->start_at;
        $event->start_date = $request->start_date;
        $event->end_at = $request->end_at;
        $event->end_date = $request->end_date;
        $event->image = $request->file('image')->hashName();
        $event->save();

        return response()->json(['message' => 'updated'], 200);
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
            return response()->json(['message' => 'deleted successfully'], 200);
        }else {
            return response()->json(['message' => 'Cannot deleted no id'], 404);
        }
    }
}
