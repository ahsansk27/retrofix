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
							<div class="col-md-12">
                           	<div class="service-details">
									<img src="{{ asset('admin/images/users') }}/{{ $freelancer->image }}" alt="">
									<h4>{{$freelancer->name}}</h4>
									<p> {{$freelancer->description}}</p>
								
								</div>
                           </div>		
                           					
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