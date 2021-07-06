@extends('back_end.layouts.layout_master_backend')

<!-- title section  -->
@section('title')

@endsection

<!-- content section -->
@section('content')



<div class="content-body">
<div class="container-fluid">


<center>
<button  class="btn btn-primary"><a href="{{ route('teams.create') }}" style="color:#ffffff;">Add Member </a> </button>
<button  class="btn btn-primary"><a href="{{ route('teams.index') }}" style="color:#ffffff;">All Members </a> </button>
</center>

<br><br>

<div class="row">

                    <div class="col-xl-3" style="visibility:hidden;">
                        
                    </div>


                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <p class="card-text">
                                <h3>Full Name</h3> -  {{ $team->fullname }}
                                </p>
                                <hr> 
                            </div>
                            <div class="card-body">
                            <img class="card-img-top img-fluid" src="{{ asset('uploads/teams/' . $team->team_image ) }}" alt="Card image cap">
                                
                               <p class="card-text">
                               <h3>Facebook</h3> -  {{ $team->facebook_url }}
                                
                                <hr> 
                                <h3>Twitter</h3> - {{ $team->twitter_url }}
                               
                                <hr>
                                <h3>Instagram</h3> - {{ $team->instagram_url }}
                                
                                <hr>
                                <h3> Linked In</h3> - {{ $team->linkedin_url }}
                                <hr>
                                <h3>Youtube </h3> - {{ $team->youtube_url }}
                                <hr>


                                <p class="card-text">
                                <h3>Description</h3> - {{ $team->description }}
                                </p>
                            </div>
                            <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                <div class="card-footer-link mb-4 mb-sm-0">
                                    <p class="card-text text-dark d-inline">
                                    {{ \Carbon\Carbon::parse($team->created_at)->diffForHumans() }}
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