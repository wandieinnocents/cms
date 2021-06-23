@extends('back_end.layouts.layout_master_backend')

<!-- title section  -->
@section('title')

@endsection

<!-- content section -->
@section('content')



<div class="content-body">
<div class="container-fluid">


<!-- <center>
<button  class="btn btn-primary"><a href="{{ route('products.create') }}" style="color:#ffffff;">Add Product </a> </button>
<button  class="btn btn-primary"><a href="{{ route('products.index') }}" style="color:#ffffff;">View Products </a> </button>
</center>

<br><br> -->

<div class="row">

                    <div class="col-xl-3" style="visibility:hidden;">
                        
                    </div>


                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">{{ $product->product_name }} - {{ $product->category->name }}</h5>
                            </div>
                            <div class="card-body">
                            <img class="card-img-top img-fluid" src="{{ asset('uploads/products/' . $product->product_image ) }}" alt="Card image cap">
                            


                                <p class="card-text">
                                {{ $product->product_description }}
                                </p>
                            </div>
                            <div class="card-footer d-sm-flex justify-content-between align-items-center">
                                <div class="card-footer-link mb-4 mb-sm-0">
                                    <p class="card-text text-dark d-inline">
                                    {{ \Carbon\Carbon::parse($product->created_at)->diffForHumans() }}
                                    </p>
                                </div>

                                <a href="javascript:void()" class="btn btn-primary">{{ $product->product_price }} UGX</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3" style="visibility:hidden;">
                        
                    </div>


                    
</div>
















    </div>
    </div>

@endsection 