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
                            <h4 class="card-title">Edit Product</h4>
                        </div>
                        <div class="card-body">
                       
                        <!-- end of validation -->
                            <div class="basic-form">
                            
                            <form action="{{ route('projects.update', $project->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                                    <div class="form-group">
                                   
                                    <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder=" Name" name="title" value="{{ $project->title }}">
                                    </div>

                                    <div class="form-group">
                                    <textarea class="form-control" placeholder=" Description" name="description" > {{ $project->description }}</textarea>
                                    </div>

                                    <!-- browse -->
                                    <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="project_image">
                                                <label class="custom-file-label">Choose file</label>
                                    </div>
                                    <br>
                                    <br>

                                <!-- submit -->
                                <button type="submit" class="btn btn-primary">UPDATE</button>
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