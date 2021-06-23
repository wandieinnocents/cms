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
                            
                                <h4 class="card-title">View Image </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                               
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <!-- start of table row -->
                                            <tr>
                                                <th><strong>#ID</strong></th>
                                                <th><strong>Title</strong></th>
                                                <th><strong>Image</strong></th>
                                                
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($images as $imageFech)
                                            <tr>
                                                <td>  {{ $imageFech->id }}</td>
                                                <td>  {{ $imageFech->title }}</td>
                                                <td>  <img src="{{ asset('uploads/products/' . $imageFech->image  ) }}" alt="img" class="img-thumbnail" width="75"> </td>	
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