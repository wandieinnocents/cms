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
                            
                                <h4 class="card-title">View Gallery Categories </h4>
                                <a href="{{ route('gallery_categories.create') }}"><button  class="btn btn-primary">Add Gallery Category</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                               
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <!-- start of table row -->
                                            <tr>
                                               
                                           
                                                <th><strong>#ID</strong></th>
                                                <th><strong>Category Name</strong></th>
                                                <th><strong>Description</strong></th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($gallery_categories as $gallery_category)
                                            <tr>
                                                
                                                <td> {{ $gallery_category->id }}</td>
                                                <td> {{ $gallery_category->gallery_category_name }}	</td>
                                                <td> {{ $gallery_category->gallery_category_description }}</td>
                                                <td>
													<div class="d-flex">
                                                    <a href="{{ route('gallery_categories.edit',$gallery_category->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <!-- delete -->
                                                        <form action="{{ route('gallery_categories.destroy', $gallery_category->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a >  <button class="btn btn-danger shadow btn-xs sharp"> <span class="fa fa-trash"> </button> </a>  
                                                        
                                                    </form>
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