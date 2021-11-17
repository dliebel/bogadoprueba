<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;



class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Project::paginate(10);
        return view('project.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datoF= \App\Models\User::all();
        return view('project.create',compact('datoF'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\CreatedProjectRequest $request)
    {
        $data = $request->all();

        Project::create($data);

        return redirect()->route('project.index')->with('success', 'El proyecto esta creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
       // $project =\App\Models\Project::find($id);
        $datoF= \App\Models\User::all();
        return view('project.edit', compact('project','datoF'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\UpdatedProjectRequest  $request, Project $project)
    {
        $project->update($request->all());

        return redirect()->route('project.index')
        ->with('success', 'Proyecto actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('project.index')
            ->with('success', 'Se borrado el proyecto');
    }
}
