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
                            <h4 class="card-title">Edit Member</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                            
                                <form action="{{ route('teams.update',$team->id) }}" method="post" enctype="multipart/form-data">
                                   @csrf
                                   @method('PATCH')

                                     <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder="Full Name" name="fullname" value="{{ $team->fullname }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder="Role"    name="role" value="{{ $team->role }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder="Facebook Link" name="facebook_url" value="{{ $team->facebook_url }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder="Twitter Link" name="twitter_url" value="{{ $team->twitter_url }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder="Instagram Link" name="instagram_url" value="{{ $team->instagram_url }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder="Linkedin Link" name="linkedin_url" value="{{ $team->linkedin_url }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder="Youtube Link" name="youtube_url" value="{{ $team->youtube_url }}">
                                    </div>
                                  

                                    <div class="form-group">
                                    <textarea class="form-control"  name="description"> {{ $team->description }}"</textarea>
                                    </div>

                                    <!-- browse -->
                                    <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="team_image" value="{{ $team->team_image }}">
                                                <label class="custom-file-label"> Choose file</label>
                                    </div>
                                    <br><br>

                                <!-- submit -->
                                <button type="submit" class="btn btn-primary">Update Member</button>
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