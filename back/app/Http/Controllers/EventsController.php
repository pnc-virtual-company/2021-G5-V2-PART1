<?php
namespace App\Http\Controllers;
use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Events::with(['user', 'categories'])->latest()->get();
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
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,jfif|max:1999',
            'body'=>'required',
            'link_join'=>'required',
            'start_at'=>'required',
            'start_date'=>'required',
            'end_at'=>'required',
            'end_date'=>'required',
        ]);
        $event = new Events();
        if($request->image !== null){
            $event->image = $request->file('image')->hashName();
            $request->file('image')->store('public/images/events');
        }
        else{
            $img = 'https://res.cloudinary.com/eventboost/image/upload/v1594282851/website/wp/eventboost-twitter-card-home.jpg';
            $event->image = $img;
        }
        $event->user_id = $request->user_id;
        $event->categories_id = $request->categories_id;
        $event->title = $request->title;
        $event->body = $request->body;
        $event->city = $request->city;
        $event->link_join = $request->link_join;
        $event->start_at = $request->start_at;
        $event->start_date = $request->start_date;
        $event->end_at = $request->end_at;
        $event->end_date = $request->end_date;


        $event->save();

        return response()->json(['events'=>$event,'message' => 'Events created successfully'], 201);
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
        return Events::with(['user', 'categories'])->findOrFail($id);
    }
    function search($title)
    {
        $result = Events::where('title', 'LIKE', '%'. $title. '%')->get();

        if(count($result)){
         return Response()->json($result);
        }
        else
        {
        return Response()->json(['Result' => 'No Data not found'], 404);
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
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,jfif|max:1999',
            'body'=>'required',
            'link_join'=>'required',
            'start_at'=>'required',
            'start_date'=>'required',
            'end_at'=>'required',
            'end_date'=>'required',
        ]);
        $event = Events::with(['user', 'categories'])->findOrFail($id);
        if($request->image !== null){
            $event->image = $request->file('image')->hashName();
            $request->file('image')->store('public/images/events');
        }
        else{
            $img = 'https://cdn4.iconfinder.com/data/icons/glyphs/24/icons_user-256.png';
            $event->image = $img;
        }

        $event->user_id = $request->user_id;
        $event->categories_id = $request->categories_id;
        $event->title = $request->title;
        $event->body = $request->body;
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
        //
        $event = Events::with(['user', 'categories'])->destroy($id);
       
        if ($event === 1) {
            return response()->json(['message' => 'deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Cannot deleted no id'], 404);
        }
    }
}
