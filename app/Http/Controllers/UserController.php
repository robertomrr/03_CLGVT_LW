<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects= '';
        $tasks='';
        // Option 1: -> with()
        return view('Users-View')
        ->with('Projects',$projects)
        ->with('tasks',$tasks);

        // Option 2: as an array
        return view('Users-View',['Projects' => $projects, 'tasks' => $tasks ]);

        // Option 3: the same but with variable
        $data = ['Projects' => $projects, 'tasks' => $tasks ];
                return view('Users-View',$data);

       // Option 4: The shortest - compact()         
       return view('Users-View',compact('Projects','tasks') );
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
