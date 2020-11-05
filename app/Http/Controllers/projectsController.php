<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\project;

class projectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = project::all();

        return view('projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => ['required','min:3'],
            'description' => ['required','min:5']
        ]);

        $project = new project();

        $project->title = request('title');
        $project->description = request('description');
        
        $project->save();

        return redirect('projects');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = project::findOrFail($id);

        return view('projects.edit',compact('project'));

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
        $project = project::findOrFail($id);

        request()->validate([
            'title' => ['required','min:3'],
            'description' => ['required','min:5']
        ]);

        $project->title = request('title');
        $project->description = request('description');
        
        $project->save();

        return redirect('projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        project::findOrFail($id)->delete();

        return redirect('projects');
    }
}
