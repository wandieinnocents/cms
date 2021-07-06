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
                                <h4 class="card-title">Services</h4>
                                <a href="{{ route('services.create') }}"><button  class="btn btn-primary">Add Content</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <!-- start of table row -->
                                            
                                            <tr>
                                               
                                           
                                                <th><strong>#ID</strong></th>
                                                <th><strong>Service Name</strong></th>
                                                <th><strong>Description</strong></th>
                                                <th><strong>Image</strong></th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($services as $service)
                                            <tr>
                                            <td>{{ $service->id }}	</td>
                                                <td>{{ $service->service_name }}	</td>
                                                <td> {{ $service->service_description }}	</td>
                                        
                                                <td>  <img src="{{ asset('uploads/services/' . $service->service_image ) }}" alt="img" class="img-thumbnail" width="75"> </td>
                                                <td>
													<div class="d-flex">
														<a href="{{ route('services.edit',$service->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <!-- show single item -->
                                                        <a href="services/{{ $service->id }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>

                                                        <!-- delete form -->
                                                        <form action="{{ route('services.destroy',$service->id) }}" method="POST"> 
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