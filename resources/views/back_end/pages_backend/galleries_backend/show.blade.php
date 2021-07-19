@extends('back_end.layouts.layout_master_backend')

<!-- title section  -->
@section('title')

@endsection

<!-- content section -->
@section('content')



<div class="content-body">
<div class="container-fluid">


<center>
<button  class="btn btn-primary"><a href="{{ route('galleries.create') }}" style="color:#ffffff;">Add Image </a>  </button>
<button  class="btn btn-primary"><a href="{{ route('galleries.index')  }}" style="color:#ffffff;">All Images</a> </button>
</center>

<br><br>

<div class="row">

                    <div class="col-xl-3" style="visibility:hidden;">
                        
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <p class="card-text">
                                <h3> Title </h3> -  {{ $gallery->title }}</p> 
                                <hr> 
                            </div>

                            <div class="card-body">
                            <img class="card-img-top img-fluid" src="{{ asset('uploads/galleries/' . $gallery->gallery_image ) }}" alt="Card image cap">
                                
                               <p class="card-text">
                                
                                <hr> 
                                 <p class="card-text">
                                <h3>Description</h3> - {{ $gallery->description }}
                                </p>
                            </div>
                            <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                <div class="card-footer-link mb-4 mb-sm-0">
                                    <p class="card-text text-dark d-inline">
                                    {{ \Carbon\Carbon::parse($gallery->created_at)->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3" style="visibility:hidden;">
                        
                    </div>


                    
</div>




    </div>
    </div>

@endsection 