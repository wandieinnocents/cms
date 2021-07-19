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
                                <h4 class="card-title">All Image</h4>
                                <a href="{{ route('galleries.create') }}"><button  class="btn btn-primary">Add Image</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <!-- start of table row -->
                                            
                                            <tr>
                                               
                                           
                                                <th><strong>#ID</strong></th>
                                                <th><strong>Title</strong></th>
                                                <th><strong>Description</strong></th>
                                                <th><strong>Image</strong></th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($galleries as $gallery)
                                            <tr>
                                                <td> {{ $gallery->id }}	        </td>
                                                <td> {{ $gallery->gallery_category->gallery_category_name }}</td>
                                                <td> {{ $gallery->title }}	    </td>
                                                <td> {{ $gallery->description }} </td>
                                        
                                                <td>  <img src="{{ asset('uploads/galleries/' . $gallery->gallery_image ) }}" alt="img" class="img-thumbnail" width="75"> </td>
                                                <td>
													<div class="d-flex">
														<a href="{{ route('galleries.edit',$gallery->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <!-- show single item -->
                                                        <a href="galleries/{{ $gallery->id }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>

                                                        <!-- delete form -->
                                                        <form action="{{ route('galleries.destroy',$gallery->id) }}" method="POST"> 
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