<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function employees(Request $request){

        $create = Employee::create([
            'name'=>$request->name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'job_explanation'=>$request->job_explain,
            'presentation_date'=>$request->presentation_date,
            'tags'=>$request->tags
            

        ]);

        return response()->json([
            'success'=>$create,
            'message'=>'employee created successfully'
        ]);

    }
    public function job(Request $request)
    {
        $show = Employee::where('presentation_date', $request->date)->get(['name', 'last_name', 'job_explanation']);

        return response()->json([
            'success'=>$show,
        ]);
        
    }

    public function addtags(Request $request){

        $show = Employee::where('tags', $request->tag)->get(['name', 'last_name', 'job_explanation']);

        return response()->json([
            'success'=>$show
        ]);
    }
    
    public function add(Request $request, Employee $employee){

        $employee->meetings()->attach($request->meetings);

        return 'Attached';
    }
}
