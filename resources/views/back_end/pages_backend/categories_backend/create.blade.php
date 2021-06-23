@extends('back_end.layouts.layout_master_backend')

<!-- title section  -->
@section('title')

@endsection

<!-- content section -->
@section('content')



<div class="content-body">
<div class="container-fluid">
<br><br><br>

        <!-- form -->
        <div class="row">
        <!-- COL 1 -->
                <div class="col-md-3 col-xl-3 col-lg-3" style="visibility:hidden;">
                
                </div>
            <!-- COL 2 - FORM -->
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Product Category</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                            <form action="{{ route('categories.store') }}" method="post">
                            {{ csrf_field() }}
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder=" Name" name="name">
                                    </div>
                                    <div class="form-group">
                                    <textarea class="form-control" placeholder=" Description" name="description"></textarea>
                                    </div>

                                     <!-- submit -->
                                     <button type="submit" class="btn btn-primary">Add Category</button>
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