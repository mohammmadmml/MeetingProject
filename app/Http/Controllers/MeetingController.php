<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meeting;

class MeetingController extends Controller
{
    public function create_meeting(Request $request) {
        
        $create = Meeting::create([
            'topic'=>$request->topic,
            'explain'=>$request->explain,
            'date'=>$request->date,
            'start'=>$request->start,
            'end'=>$request->end,
            'location'=>$request->location,
            'tags'=>$request->tags
        ]);

        return response()->json([
            'success'=>$create,
            'message'=> 'meeting created successfully'
        ]);
    }
    public function show(Request $request) {

        $show = Meeting::where('date', $request->date)->get(['topic', 'explain', 'date', 'start', 'end', 'location', 'tags']);

        return response()->json([
            'success'=>$show
        ]);
    }
    public function tags(Request $request) {
        $tags = Meeting::where('tags', $request->tag)->get(['topic', 'explain', 'date', 'start', 'end', 'location']);

        return response()->json([
            'success'=>$tags
        ]);
    }

    public function addEmployees(Request $request, Meeting $meeting){

        $meeting->employees()->attach($request->employees);

        return 'Attached';
    }
}
