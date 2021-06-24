@extends('back_end.layouts.layout_master_backend')

<!-- title section  -->
@section('title')

@endsection

<!-- content section -->
@section('content')



<div class="content-body">
<div class="container-fluid">


        <!-- form -->
        <div class="row">
        <!-- COL 1 -->
                <div class="col-md-3 col-xl-3 col-lg-3" style="visibility:hidden;">
                
                </div>
            <!-- COL 2 - FORM -->
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Content</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                            
                                <form action="{{ route('abouts.update',$about->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')

                                     <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder="Sub Heading" name="sub_heading" value="{{ $about->sub_heading }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder=" Heading"    name="heading" value="{{ $about->heading }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder="Mission" name="mission" value="{{ $about->mission }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder="Vision" name="vision" value="{{ $about->vision }}">
                                    </div>

                                    <div class="form-group">
                                    <textarea class="form-control"  name="core_values"> {{ $about->core_values }}</textarea>
                                    </div>

                                    <div class="form-group">
                                    <textarea class="form-control"  name="background"> {{ $about->background }} </textarea>
                                    </div>

                                    <!-- browse -->
                                    <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="about_image">
                                                <label class="custom-file-label">Choose file</label>
                                    </div>
                                    <br><br>

                                <!-- submit -->
                                <button type="submit" class="btn btn-primary">Update Content</button>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                  
                </div>
                


            <!-- COL 3 -->
            <div class="col-md-3 col-xl-3 col-lg-3" style="visibility:hidden;">
               
            </div>
               <!-- end form -->
    
    </div>

    </div>
    </div>

@endsection 