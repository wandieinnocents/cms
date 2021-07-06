<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('back_end.pages_backend.teams_backend.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.pages_backend.teams_backend.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // store about content to database
        $team = new Team();
        $team->fullname         = $request->fullname;
        $team->role             = $request->role;
        $team->facebook_url     = $request->facebook_url;
        $team->twitter_url      = $request->twitter_url;
        $team->instagram_url    = $request->instagram_url;
        $team->linkedin_url     = $request->linkedin_url;
        $team->youtube_url      = $request->youtube_url;
        $team->description      = $request->description;

        //image upload

        if($request->hasfile('team_image')){
            $file               = $request->file('team_image');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/teams/',$filename);
            $team->team_image   = $filename;
        }

        else{
            return $request;
            $team->team_image = '';
        }
        // save data to the database
        $team->save();
        return redirect('/teams');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('back_end.pages_backend.teams_backend.show',compact('team',$team));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('back_end.pages_backend.teams_backend.edit',compact('team'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fullname          = $request->fullname;
        $role              = $request->role;
        $facebook_url      = $request->facebook_url;
        $twitter_url       = $request->twitter_url;
        $instagram_url     = $request->instagram_url;
        $linkedin_url      = $request->linkedin_url;
        $youtube_url       = $request->youtube_url;
        $description       = $request->description;

        
        $image = $request->file('team_image');
        
        $imageName = time().'.'.$image->extension();

        // modify image path
        $image->move(public_path('uploads/teams/'),$imageName);

        //pick id fields for updating
        $team = Team::find($id);

        // db fields
        $team->fullname         = $fullname;
        $team->role             = $role;
        $team->facebook_url     = $facebook_url;
        $team->twitter_url      = $twitter_url;
        $team->instagram_url    = $instagram_url;
        $team->linkedin_url     = $linkedin_url;
        $team->youtube_url      = $youtube_url;
        $team->description      = $description;
        $team->team_image       = $imageName;

        //update db 
        $team->save();

        return redirect('/teams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        // redirect
        return redirect('/teams');
    }
}
