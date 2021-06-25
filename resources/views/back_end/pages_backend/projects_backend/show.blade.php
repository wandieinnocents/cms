@extends('back_end.layouts.layout_master_backend')

<!-- title section  -->
@section('title')

@endsection

<!-- content section -->
@section('content')



<div class="content-body">
<div class="container-fluid">


<center>
<button  class="btn btn-primary"><a href="{{ route('projects.create') }}" style="color:#ffffff;">Add Project </a> </button>
<button  class="btn btn-primary"><a href="{{ route('projects.index') }}" style="color:#ffffff;">View Projects </a> </button>
</center>

<br><br>

<div class="row">

                    <div class="col-xl-3" style="visibility:hidden;">
                        
                    </div>


                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">{{ $project->title }} </h5>
                            </div>
                            <div class="card-body">
                            <img class="card-img-top img-fluid" src="{{ asset('uploads/projects/' . $project->project_image ) }}" alt="Card image cap">
                            


                                <p class="card-text">
                                {{ $project->description }}
                                </p>
                            </div>
                            <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                <div class="card-footer-link mb-4 mb-sm-0">
                                    <p class="card-text text-dark d-inline">
                                    {{ \Carbon\Carbon::parse($project->created_at)->diffForHumans() }}
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