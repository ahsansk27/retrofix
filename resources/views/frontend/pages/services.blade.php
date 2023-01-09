@extends('frontend.layout.master')
@section('content')


<div id="content">
		<div class="entry-content">

			<div class="page-title">
				<div class="container">
					<h1>Our Services</h1>
				</div>
			</div>

			<div class="breadcrumbs">
				<div class="container">
					<ul class="crumb">
						<li><a href="#"><i class="fa fa-home"></i> Home</a></li> <span>/</span>
						<li class="active"> Our Services</li>
					</ul>
				</div>
			</div>

			<div class="page-content">
				<section class="list-services">
					<div class="container">
						<div class="row">
						@foreach($services as $servi)	
                        <div class="col-md-4 col-sm-6">
								<div class="service-box">
									<a href="{{ route('services-detail',$servi->id) }}"><img src="{{ asset('admin/images/service') }}/{{ $servi->image }}" alt=""></a>
									<h4><a href="{{ route('services-detail',$servi->id) }}">{{ $servi->name }}</a></h4>
									<p>{{ $servi->description }}</p>
									<a href="{{ route('services-detail',$servi->id) }}" class="more-link">Read More</a>
								</div>
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
									<a href="#" class="ot-btn btn-color">Get a quote</a>
								</div>
							</div>
						</div>
					</div>
				</section>
							
			</div>

		</div>		
	</div>
@endsection