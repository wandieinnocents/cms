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
                                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif
                            <div class="basic-form">
                            <form action="{{ route('imagess.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                    <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder=" Name" name="title">
                                    </div>

                            
                                    <!-- browse -->
                                    <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image">
                                                <label class="custom-file-label">Choose file</label>
                                    </div>

                                <!-- submit -->
                                <br><br>
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