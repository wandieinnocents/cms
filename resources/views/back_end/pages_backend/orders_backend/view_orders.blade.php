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
                                <h4 class="card-title">Orders Recieved</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <!-- start of table row -->
                                            <tr>
                                               
                                           
                                                <th><strong>#ID</strong></th>
                                                <th><strong>Full Name</strong></th>
                                                <th><strong>Email</strong></th>
                                                <th><strong>Category</strong></th>
                                                <th><strong>Product</strong></th>
                                                <th><strong>Contact</strong></th>
                                                <th><strong>Location</strong></th>
                                                <th><strong>Description</strong></th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td>1 	</td>
                                                <td> Wandie	</td>
                                                <td>wandie@gmail.com</td>
                                                <td>Gas Cyclinder</td>
                                                <td>12 KG GAS</td>
                                                <td>0706382817</td>
                                                <td>Kireka</td>
                                                <td>Description</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a> 

                                                        
													</div>
												</td>
                                            </tr>
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