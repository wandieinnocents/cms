<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('back_end.pages_backend.abouts_backend.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.pages_backend.abouts_backend.create');
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
        $about = new About();
        $about->sub_heading = $request->sub_heading;
        $about->heading     = $request->heading;
        $about->mission     = $request->mission;
        $about->vision      = $request->vision;
        $about->core_values = $request->core_values;
        $about->background     = $request->background;

        //image upload

        if($request->hasfile('about_image')){
            $file               = $request->file('about_image');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/abouts/',$filename);
            $about->about_image   = $filename;
        }

        else{
            return $request;
            $product->about_image = '';
        }
        // save data to the database
        $about->save();
        return redirect('/abouts');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        return view('back_end.pages_backend.abouts_backend.show',compact('about',$about));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::findOrFail($id);
        // $categories = Category::all();

        return view('back_end.pages_backend.abouts_backend.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $sub_heading   = $request->sub_heading;
        $heading       = $request->heading;
        $mission       = $request->mission;
        $vision        = $request->vision;
        $core_values   = $request->core_values;
        $background    = $request->background;

        
        $image = $request->file('about_image');
        
        $imageName = time().'.'.$image->extension();

        // modify image path
        $image->move(public_path('uploads/abouts/'),$imageName);

        //pick id fields for updating
        $about = About::find($id);

        // db fields
        $about->sub_heading = $sub_heading;
        $about->heading = $heading;
        $about->mission = $mission;
        $about->vision = $vision;
        $about->core_values = $core_values;
        $about->background = $background;
        $about->about_image = $imageName;

        //update db 
        $about->save();

        return redirect('/abouts')->with('success', 'Content is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::findOrFail($id);
        $about->delete();

        // redirect
        return redirect('/abouts');
    }
}
