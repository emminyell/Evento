<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $events = Event::where('organizer_id', $userId)->get();
        $categories = Categorie::all();
        return view('dashboard',compact('events','categories'));
    }
    public function welcome()
    {

    // Get events created by the current user
    $events = Event::all();
        return view('welcome',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest  $request)
    {

        $validatedData = $request->validated();
        $validatedData +=["organizer_id"=>auth()->user()->id];
        Event::create($validatedData);

        return redirect()->route('dashboard');

    }


    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $events = Event::findOrfail($id);

        return view('event.editEvent',compact('events'));
    }

    /**

Update the specified resource in storage.*
@param  \App\Http\Requests\UpdateEventsRequest  $request
@param  \App\Models\Events  $events
@return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
    $event = Event::findOrFail($id);

        $event->update([
           'title' => $request->title,
           'description' => $request->description,
            'date' => $request->date,
            'location' => $request->location,
            'nb_place' => $request->nb_place,
        ]);


        return redirect()->route('dashboard')->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect()->route('dashboard');
    }
}
