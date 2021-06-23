@extends('back_end.layouts.layout_master_backend')

<!-- title section  -->
@section('title')

@endsection

<!-- content section -->
@section('content')
<div class="content-body rightside-event">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="welcome-card rounded pl-5 pt-5 pb-4 mt-3 position-relative mb-5">
							<h4 class="text-warning">Gas Delivery Project</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dumm.</p>
							<a class="btn btn-warning btn-rounded" href="javascript:void(0);">Learn More <i class="las la-long-arrow-alt-right ml-4"></i></a>
							<a class="btn-link text-dark ml-3" href="javascript:void(0);">Remind Me Later</a>
							<img src="assets/backendassets/image/svg/welcom-card.svg" alt="" class="position-absolute">
						</div>
					</div>
					<div class="col-xl-12">
						<div id="user-activity" class="card">
							<div class="card-header border-0 pb-0 d-sm-flex d-block">
								<div>
									<h4 class="card-title mb-1">Sales Revenue</h4>
								</div>
								<div class="card-action card-tabs mt-3 mt-sm-0">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#user" role="tab" aria-selected="true">
												Monthly
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#bounce" role="tab" aria-selected="false">
												Weekly
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#session-duration" role="tab" aria-selected="false">
												Today
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-body">
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade active show" id="user" role="tabpanel"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
										<canvas id="activityLine" class="chartjs chartjs-render-monitor" height="350" style="display: block; width: 1041px; height: 350px;" width="1041"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxxl-12 col-lg-6">
						<div class="card">
							<div class="card-header border-0 pb-3 d-sm-flex d-block ">
								<h4 class="card-title">Latest Sales</h4>
								<div class="d-flex mt-3 mt-sm-0">
									<div class="dropdown ">
										<button type="button" class="btn btn-primary dropdown-toggle light btn-sm btn-rounded" data-toggle="dropdown" aria-expanded="false">
											Weekly
										</button>
										<div class="dropdown-menu" >
											<a class="dropdown-item" href="javascript:void(0);">Daily</a>
											<a class="dropdown-item" href="javascript:void(0);">Weekly</a>
											<a class="dropdown-item" href="javascript:void(0);">Monthly</a>
										</div>
									</div>
									<div class="dropdown ml-2">
										<button type="button" class="btn btn-primary dropdown-toggle light btn-sm btn-rounded" data-toggle="dropdown" aria-expanded="false">
											2020
										</button>
										<div class="dropdown-menu" >
											<a class="dropdown-item" href="javascript:void(0);">2020</a>
											<a class="dropdown-item" href="javascript:void(0);">2019</a>
											<a class="dropdown-item" href="javascript:void(0);">2018</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="row mx-0 align-items-center">
									<div class="col-sm-8 col-md-7 col-xxl-7 px-0 text-center mb-3 mb-sm-0">
										<div id="chart" class="d-inline-block"></div>
									</div>
									<div class="col-sm-4 col-md-5 col-xxl-5 px-0">
										<div class="chart-deta">
											<div class="col px-0">
												<span class="bg-warning"></span>	
												<div>
													<p class="fs-14">Ticket Left</p>
													<h3>21,512</h3>
												</div>
											</div>
											<div class="col px-0">
												<span class="bg-primary"></span>	
												<div>
													<p class="fs-14">Ticket Sold</p>
													<h3>456,721</h3>
												</div>
											</div>
											<div class="col px-0">
												<span class="bg-success"></span>	
												<div>
													<p class="fs-14">Event Held</p>
													<h3>235</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxxl-12 col-lg-6">
						<div class="card widget-media">
							<div class="card-header border-0 pb-0 ">
								<h4 class="text-black">Latest Sales</h4>
								<div class="dropdown ml-auto text-right">
									<div class="btn-link" data-toggle="dropdown">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
									</div>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="javascript:void(0);">View Detail</a>
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<div class="card-body timeline pb-2">
								<div class="timeline-panel align-items-end">
									<div class="media mr-3">
										<img class="rounded-circle" alt="image" width="50" src="assets/backendassets/image/avatar/1.jpg">
									</div>
									<div class="media-body">
										<h5 class="mb-1"><a class="text-black" href="javascript:void(0);">Olivia Johnson</a></h5>
										<p class="d-block mb-0 text-primary"><i class="las la-ticket-alt mr-2 scale5 ml-1"></i>Height Performance conert 2020</p>
									</div>
									<p class="mb-0 fs-14">2m ago</p>
								</div>
								<div class="timeline-panel align-items-end">
									<div class="media mr-3">
										<img class="rounded-circle" alt="image" width="50" src="assets/backendassets/image/avatar/2.jpg">
									</div>
									<div class="media-body">
										<h5 class="mb-1"><a class="text-black" href="javascript:void(0);">Griezerman</a></h5>
										<p class="d-block mb-0 text-primary"><i class="las la-ticket-alt mr-2 scale5 ml-1"></i>Fireworks Show New Year 2020</p>
									</div>
									<p class="mb-0 fs-14">5m ago</p>
								</div>
								<div class="timeline-panel align-items-end">
									<div class="media mr-3">
										<img class="rounded-circle" alt="image" width="50" src="assets/backendassets/image/avatar/3.jpg">
									</div>
									<div class="media-body">
										<h5 class="mb-1"><a class="text-black" href="javascript:void(0);">Uli Trumb</a></h5>
										<p class="d-block mb-0 text-primary"><i class="las la-ticket-alt mr-2 scale5 ml-1"></i>Height Performance conert 2020</p>
									</div>
									<p class="mb-0  fs-14">8m ago</p>
								</div>
								<div class="timeline-panel align-items-end">
									<div class="media mr-3">
										<img class="rounded-circle" alt="image" width="50" src="assets/backendassets/image/avatar/4.jpg">
									</div>
									<div class="media-body">
										<h5 class="mb-1"><a class="text-black" href="javascript:void(0);">Oconner</a></h5>
										<p class="d-block mb-0 text-primary"><i class="las la-ticket-alt mr-2 scale5 ml-1"></i>Fireworks Show New Year 2020</p>
									</div>
									<p class="mb-0 fs-14">12m ago</p>
								</div>
							</div>
							<div class="card-footer border-0 pt-0 text-center">
								<a href="javascript:void(0);" class="btn-link">View more <i class="fa fa-angle-down ml-2 scale-2"></i></a>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
								<div class="row mx-0">
									<div class="col-sm-12 col-lg-4 px-0">
										<h2 class="fs-40 text-black font-w600">862,441 <small class="fs-18 ml-2 font-w600 mb-1">pcs</small></h2>
										<p class="font-w100 fs-20 text-black">Ticket Sold Today</p>
										<div class="justify-content-between border-0 d-flex fs-14 align-items-end">
											<a href="javascript:void(0);" class="text-primary">View more <i class="las la-long-arrow-alt-right scale5 ml-2"></i></a>
											<div class="text-right">
												<span class="peity-primary" data-style="width:100%;">0,2,1,4</span>
												<h3 class="mt-2 mb-1">+4%</h3>
												<span>than last day</span>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-lg-8 px-0">
										<canvas id="ticketSold" height="200"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
@endsection



