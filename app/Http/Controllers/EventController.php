<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EventController extends Controller
{


    public function index()
    {
        $events = Auth::user()->events()->latest()->get();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        $user = $event->user;
        $sitemap = $event->sitemap;

        return view('events.show', compact('event', 'user', 'sitemap'));
    }
    public function store(Request $request)
    {
        // Validation rules
        $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'taka' => 'required|numeric',
            'date' => 'required|date',
            'day' => 'required|string',
            'description' => 'required|string',
        ]);

        $user = Auth::user();

        $eventData = [
            'user_id' => $user->id,
            'name' => $request->name,
            'taka' => $request->taka,
            'date' => $request->date,
            'day' => $request->day,
            'description' => $request->day,
        ];

        // Process image if uploaded
        if ($request->file('image')) {
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('All_Images/events'), $name_gen);
            $eventData['image'] = 'All_Images/events/' . $name_gen;
        }


        // Create the event
        Event::create($eventData);

        return redirect()->route('events.index', $user->username);
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        // Add any additional data you need and load the edit view
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        // Validation rules
        $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'taka' => 'required|numeric',
            'date' => 'required|date',
            'day' => 'required|string',
            'description' => 'required|string',
        ]);

        $event = Event::findOrFail($id);

        $eventData = [
            'name' => $request->name,
            'taka' => $request->taka,
            'date' => $request->date,
            'day' => $request->day,
            'description' => $request->description,
        ];

        // Process image if uploaded
        if ($request->file('image')) {
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('All_Images/events'), $name_gen);
            $eventData['image'] = 'All_Images/events/' . $name_gen;
        }

        // Update the event
        $event->update($eventData);

        return redirect()->route('events.index')->with('success', 'Event updated successfully');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        // Delete the event
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event deleted successfully');
    }

}
