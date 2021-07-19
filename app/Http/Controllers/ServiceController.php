<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('back_end.pages_backend.services_backend.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.pages_backend.services_backend.create');
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
        $service = new Service();
        $service->service_name         = $request->service_name;
        $service->service_description  = $request->service_description;

        //image upload

        if($request->hasfile('service_image')){
            $file               = $request->file('service_image');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/services/',$filename);
            $service->service_image   = $filename;
        }

        else{
            return $request;
            $service->service_image = '';
        }
        // save data to the database
        $service->save();
        return redirect('/services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('back_end.pages_backend.services_backend.show',compact('service',$service));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('back_end.pages_backend.services_backend.edit',compact('service'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service_name        = $request->service_name;
        $service_description = $request->service_description;
       
        $image = $request->file('service_image');
        
        $imageName = time().'.'.$image->extension();

        // modify image path
        $image->move(public_path('uploads/services/'),$imageName);

        //pick id fields for updating
        $service = Service::find($id);

        // db fields
        $service->service_name = $service_name;
        $service->service_description = $service_description;
        $service->service_image = $imageName;

        //update db 
        $service->save();

        return redirect('/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        
        // redirect
        return redirect('/services');
    }
}
