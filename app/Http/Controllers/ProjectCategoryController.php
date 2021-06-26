<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project_categories = ProjectCategory::all();
        return view('back_end.pages_backend.project_categories_backend.index',compact('project_categories'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.pages_backend.project_categories_backend.create');   
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project_category = new ProjectCategory;
        $project_category->name = $request->name;
        $project_category->description = $request->description;

        // save data to the database
        $project_category->save();
        return redirect('/project_categories');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectCategory $projectCategory)
    {
        return view('back_end.pages_backend.project_categories_backend.show'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project_category = ProjectCategory::findOrFail($id);
        return view('back_end.pages_backend.project_categories_backend.edit',compact('project_category')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name               = $request->name;
        $description         = $request->description;

        //pick id fields for updating
        $project_category = ProjectCategory::find($id);
        // db fields
        $project_category->name         = $name;
        $project_category->description  = $description;
        //update db 
        $project_category->save();

        return redirect('/project_categories'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project_category = ProjectCategory::findOrFail($id);
        $project_category->delete();

        // redirec
        return redirect('/project_categories');
    }
}
