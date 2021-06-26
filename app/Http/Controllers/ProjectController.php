<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $projects = Project::with('project_category')->get();
        return view('back_end.pages_backend.projects_backend.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project_categories = ProjectCategory::all();
        return view('back_end.pages_backend.projects_backend.create',compact('project_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project();
        $project->project_category_id       = $request->project_category_id;
        $project->title                     = $request->title;
        $project->description               = $request->description;

         //image upload

         if($request->hasfile('project_image')){
            $file               = $request->file('project_image');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/projects/',$filename);
            $project->project_image   = $filename;
        }

        else{
            return $request;
            $project->project_image = '';
        }
        // save data to the database
        $project->save();
        return redirect('/projects');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('back_end.pages_backend.projects_backend.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $project_categories = ProjectCategory::all();

        return view('back_end.pages_backend.projects_backend.edit',compact('project','project_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project_category_id = $request->project_category_id;
        $title               = $request->title;
        $description         = $request->description;
        $mission             = $request->mission;
        // image
        $image = $request->file('project_image');
        $imageName = time().'.'.$image->extension();

        // modify image path
        $image->move(public_path('uploads/projects/'),$imageName);

        //pick id fields for updating
        $project = Project::find($id);

        // db fields
        $project->project_category_id       = $project_category_id;
        $project->title                     = $title;
        $project->description               = $description;
        $project->project_image             = $imageName;

        //update db 
        $project->save();

        return redirect('/projects');   
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        // redirec
        return redirect('/projects');
    }
}
