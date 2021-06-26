@extends('back_end.layouts.layout_master_backend')

<!-- title section  -->
@section('title')

@endsection

<!-- content section -->
@section('content')

<div class="content-body">
            <div class="container-fluid">

<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                            
                                <h4 class="card-title">View Projects </h4>
                                <a href="{{ route('projects.create') }}"><button  class="btn btn-primary">Add Project</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                               
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <!-- start of table row -->
                                            <tr>
                                               
                                           
                                                <th><strong>#ID</strong></th>
                                                <th><strong>Category</strong></th>
                                                <th><strong>Title</strong></th><th><strong>Description</strong></th>
                                                <th><strong>Image</strong></th>
                                                <th colspan="3">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($projects as $project)
                                            <tr>
                                                
                                                <td> {{ $project->id }}</td>
                                                <td> {{ $project->project_category->name }}</td>
                                                <td> {{ $project->title }}	</td>
                                                <td> {{ $project->description }} </td>
                                                <td>  <img src="{{ asset('uploads/projects/' . $project->project_image ) }}" alt="img" class="img-thumbnail" width="75"> </td>	

                                                <td>
													<div class="d-flex">
                                                  
														<a href="{{ route('projects.edit',$project->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="projects/{{ $project->id }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                                                        <!-- delete -->
                                                        <form action="{{ route('projects.destroy', $project->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a >  <button class="btn btn-danger shadow btn-xs sharp"> <span class="fa fa-trash"> </button> </a>  
                                                        
                                                       </form>
                                                  </div>
												</td>
                                            </tr>
                                            @endforeach

                                            <!-- end of table row -->
											
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

</div>
</div>

@endsection 