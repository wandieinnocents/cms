<?php

namespace App\Http\Controllers;

use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class GalleryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery_categories = GalleryCategory::all();
        return view('back_end.pages_backend.gallery_categories_backend.index',compact('gallery_categories'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.pages_backend.gallery_categories_backend.create');   

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery_category = new GalleryCategory();
        $gallery_category->gallery_category_name          = $request->gallery_category_name;
        $gallery_category->gallery_category_description   = $request->gallery_category_description;

        // save data to the database
        $gallery_category->save();  
        return redirect('/gallery_categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GalleryCategory  $galleryCategory
     * @return \Illuminate\Http\Response
     */
    public function show(GalleryCategory $galleryCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GalleryCategory  $galleryCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery_category = GalleryCategory::findOrFail($id);
        return view('back_end.pages_backend.gallery_categories_backend.edit',compact('gallery_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GalleryCategory  $galleryCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $gallery_category_name         = $request->gallery_category_name;
        $gallery_category_description  = $request->gallery_category_description;  

        //pick id fields for updating
        $gallery_category = GalleryCategory::find($id);

        // db fields
        $gallery_category->gallery_category_name        = $gallery_category_name;
        $gallery_category->gallery_category_description = $gallery_category_description;
        
        //update db 
        $gallery_category->save();

        return redirect('/gallery_categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GalleryCategory  $galleryCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery_category = GalleryCategory::findOrFail($id);
        $gallery_category->delete();

        // redirec
        return redirect('/gallery_categories');
    }
}
