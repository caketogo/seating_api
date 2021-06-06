<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Create a new event
     */
    public function create(Request $request)
    {
        $data = $request->all();
        $event = Event::make($data);
        $event->user_id = Auth::user()->id;
        $event->save();
    }
}
