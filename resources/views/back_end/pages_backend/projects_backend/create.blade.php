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
                            <h4 class="card-title">Add Project</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                            
                                <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                    <select name="project_category_id" id="">
                                    @foreach($project_categories as $project_category_fetch)
                                    <option value="{{ $project_category_fetch->id }}">{{ $project_category_fetch->name }}</option>
                                    @endforeach
                                    </select>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder="Title" name="title">
                                    </div>


                                    <div class="form-group">
                                    <textarea class="form-control" placeholder=" Description" name="description"> Description</textarea>
                                    </div>

                                   <!-- browse -->
                                   <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="project_image">
                                                <label class="custom-file-label">Choose file</label>
                                    </div>
                                    <br><br>

                                <!-- submit -->
                                <button type="submit" class="btn btn-primary">Add Project</button>
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