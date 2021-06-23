<?php

namespace App\Http\Controllers;

use App\Models\ImageUpload;
use Illuminate\Http\Request;


class ImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = ImageUpload::all();
        return view('back_end.imageupload.index',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.imageupload.create');
    }






    /**
     *  
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $imageTest                 = new ImageUpload();
        $imageTest->title          = $request->title;

        if($request->hasfile('image')){
            $file               = $request->file('image');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/products/',$filename);
            $imageTest->image   = $filename;
        }

        else{
            return $request;
            $imageTest->image = '';
            }
        // SAVE 
        $imageTest->save();
        return redirect('/imagess');
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageUpload  $imageUpload
     * @return \Illuminate\Http\Response
     */
    public function show(ImageUpload $imageUpload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageUpload  $imageUpload
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageUpload $imageUpload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImageUpload  $imageUpload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImageUpload $imageUpload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageUpload  $imageUpload
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageUpload $imageUpload)
    {
        //
    }
}
