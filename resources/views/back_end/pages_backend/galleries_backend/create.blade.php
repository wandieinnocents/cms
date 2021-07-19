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
                            <h4 class="card-title">Add Image</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                            
                                <form action="{{ route('galleries.store') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                   

                                    <div class="form-group">
                                    <select name="gallery_category_id" id="">
                                    @foreach($gallery_categories as $gallery_category_fetch)
                                    <option value="{{ $gallery_category_fetch->id }}">{{ $gallery_category_fetch->gallery_category_name }}</option>
                                    @endforeach
                                    </select>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder="title" name="title">
                                    </div>

                                   
                                    <div class="form-group">
                                    <textarea class="form-control"  name="description"> Description</textarea>
                                    </div>

                                    <!-- browse -->
                                    <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="gallery_image">
                                                <label class="custom-file-label">Choose file</label>
                                    </div>
                                    <br><br>

                                <!-- submit -->
                                <button type="submit" class="btn btn-primary">Add Image</button>
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