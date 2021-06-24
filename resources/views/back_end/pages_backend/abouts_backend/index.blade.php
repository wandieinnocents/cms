@extends('back_end.layouts.layout_master_backend')

<!-- title section  -->
@section('title')

@endsection

<!-- content section -->
@section('content')


<!-- contact , location ,  -->
<div class="content-body">
            <div class="container-fluid">

<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">About Page Content</h4>
                                <a href="{{ route('abouts.create') }}"><button  class="btn btn-primary">Add Content</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <!-- start of table row -->
                                            
                                            <tr>
                                               
                                           
                                                <th><strong>#ID</strong></th>
                                                <th><strong>Sub Heading</strong></th>
                                                <th><strong>Heading</strong></th>
                                                <th><strong>Mission</strong></th>
                                                <th><strong>Vision</strong></th>
                                                <th><strong>Core Values</strong></th>
                                                <th><strong>Background</strong></th>
                                                <th><strong>Image</strong></th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($abouts as $about)
                                            <tr>
                                            <td>{{ $about->id }}	</td>
                                                <td>{{ $about->sub_heading }}	</td>
                                                <td> {{ $about->heading }}	</td>
                                                <td>{{ $about->mission }}</td>
                                                <td>{{ $about->vision }}</td>
                                                <td>{{ $about->core_values }}</td>
                                                <td>{{ $about->background }}</td>
                                                <td>  <img src="{{ asset('uploads/abouts/' . $about->about_image ) }}" alt="img" class="img-thumbnail" width="75"> </td>
                                                <td>
													<div class="d-flex">
														<a href="{{ route('abouts.edit',$about->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <!-- show single item -->
                                                        <a href="abouts/{{ $about->id }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>

                                                        <!-- delete form -->
                                                        <form action="{{ route('abouts.destroy',$about->id) }}" method="POST"> 
                                                        @csrf()
                                                        @method('DELETE')
                                                        <a >  <button class="btn btn-danger shadow btn-xs sharp"> <span class="fa fa-trash"> </button> </a>  
                                                        </form>
                                                        <!-- end of delete form -->

                                                        
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