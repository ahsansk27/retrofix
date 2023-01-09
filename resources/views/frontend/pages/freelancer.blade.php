@extends('frontend.layout.master')
@section('content')
<div id="content">
		<div class="entry-content">

			<div class="page-title">
				<div class="container">
					<h1>Freelancers</h1>
				</div>
			</div>

			<div class="breadcrumbs">
				<div class="container">
					<ul class="crumb">
						<li><a href="#"><i class="fa fa-home"></i> Home</a></li> <span>/</span>
						<li><a href="#"> Our Services</a></li> <span>/</span>
						<li class="active"> Freelancers</li>
					</ul>
				</div>
			</div>

			<div class="page-content">
				<section class="single-services">
					<div class="container">
						<div class="row">
							@foreach($users as $user)
							<div class="col-md-3">
                                <a href="{{ route('freelancer-detail',$user->id) }}">
									<form method="post" action="{{ route('book_now',$user->id) }}">
										@csrf
										<div class="service-details">
											<img src="{{ asset('admin/images/users') }}/{{ $user->image }}" alt="" style="height: 200px;display: block;margin-left: auto;margin-right: auto;">
											<h4 style="text-align: center;">{{$user->name}}</h4>
											@foreach($user['user_services'] as $service)
											<span>{{ $service->services->name }}</span>,
											@endforeach
											<p class="form-submit" style="text-align: center;margin-top: 10px;">
												<input name="submit" type="submit" id="submit" class="submit ot-btn btn-color" value="Book Now">
											</p>
										</div>
										
									</form>
                                </a>
							</div>		
                            @endforeach					
						</div>
					</div>
				</section>

				<section class="action-about">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="call-action">
									<h4>We’ve Completed More Than 100+ project for our amazing clients, if you interested?</h4>
									<a href="contact.html" class="ot-btn btn-color">Get a quote</a>
								</div>
							</div>
						</div>
					</div>
				</section>
							
			</div>

		</div>		
	</div>

@endsection