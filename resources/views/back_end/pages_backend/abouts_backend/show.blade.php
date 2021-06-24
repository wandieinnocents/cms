@extends('back_end.layouts.layout_master_backend')

<!-- title section  -->
@section('title')

@endsection

<!-- content section -->
@section('content')



<div class="content-body">
<div class="container-fluid">


<center>
<button  class="btn btn-primary"><a href="{{ route('abouts.create') }}" style="color:#ffffff;">Add Content </a> </button>
<button  class="btn btn-primary"><a href="{{ route('abouts.index') }}" style="color:#ffffff;">All Content </a> </button>
</center>

<br><br>

<div class="row">

                    <div class="col-xl-3" style="visibility:hidden;">
                        
                    </div>


                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <p class="card-text">
                                <h3>Sub Heading</h3> -  {{ $about->sub_heading }}
                                </p>
                                <hr> 
                              
                                

                                
                            </div>
                            <div class="card-body">
                            <img class="card-img-top img-fluid" src="{{ asset('uploads/abouts/' . $about->about_image ) }}" alt="Card image cap">
                                
                               <p class="card-text">
                               <h3>Heading</h3> -  {{ $about->heading }}
                                
                                <hr> 
                                <h3>Mission</h3> - {{ $about->mission }}
                               
                                <hr>
                                <h3>Vision</h3> - {{ $about->vision }}
                                
                                <hr>
                                <h3>Core Values</h3> - {{ $about->core_values }}
                               
                                <hr>

                                <p class="card-text">
                                <h3>Background</h3> - {{ $about->background }}
                                </p>
                            </div>
                            <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                <div class="card-footer-link mb-4 mb-sm-0">
                                    <p class="card-text text-dark d-inline">
                                    {{ \Carbon\Carbon::parse($about->created_at)->diffForHumans() }}
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