@extends('frontend.layout.master')
@section('content')

<div id="content">
		<div class="entry-content">

			<div class="page-title">
				<div class="container">
					<h1>Setting</h1>
				</div>
			</div>

			<div class="breadcrumbs">
				<div class="container">
					<ul class="crumb">
						<li><a href="#"><i class="fa fa-home"></i> Home</a></li> <span>/</span>
						<li class="active"> Setting</li>
					</ul>
				</div>
			</div>

			<div class="page-content">
				<section class="form-info">
					<div class="container">
						<div class="row">

							
							<div class="col-md-12">
								<div class="contact-form">
									<form action="{{ route('setting-post',$users->id) }}" method="post"  class="comment-form" novalidate="">
									@csrf	
                                    <div class="row-comment">
										<p class="col-6">
											<label>Name</label>
											<input id="name" name="name" value="{{$users->name}}" type="text" value="" placeholder="Your Name">
											<span class="error" id="err-name">please enter name</span>
										</p>
										<p class="col-6">
											<label>Email</label>
											<input id="email" name="email" value="{{$users->email}}" type="email" value="" placeholder="Your Email">
										</p>
										
									</div>
										
									@foreach($users->user_services as $key => $user_service)
									<div class="row-comment">										
										<p class="col-4">
											<label>Name</label>
											<input id="name" value="{{$user_service->services != null ? $user_service->services->name : ''}}" type="text" disabled>
										</p>
										<p class="col-4">
											<label>Price</label>
											<input id="name" name="user_services[{{ $key }}][id]" value="{{$user_service->id }}" type="hidden">
											<input name="user_services[{{ $key }}][price]" value="{{$user_service->price}}" type="text">
										</p>
										<p class="col-4">
											<label>Status</label>
											<select name="user_services[{{ $key }}][status]">
												<option value="0" {{ $user_service->status == 0 ? 'selected' : '' }}>Active</option>
												<option value="1" {{ $user_service->status == 1 ? 'selected' : '' }}>Inactive</option>
											</select>
										</p>
									</div>
									@endforeach
									<div class="row-comment">
										<textarea id="Description" name="description" placeholder="Your Description" style="margin-bottom: 18px;">{{$users->description}}</textarea>
									</div>
									
									<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit ot-btn btn-color" value="Submit"></p>
									</form>
									</div>
							</div>

						</div>
					</div>
				</section>

				
			</div>

		</div>		
	</div>
	<style>
		select{
			height: 50px;
    line-height: 50px;
    background: #f2f2f2;
    border: none;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    width: 100%;
    padding: 0 15px;
    vertical-align: top;
		}
	.col-6{
		width: 49%;
		float: left;
		margin-left: 1%;
	}
	</style>
@endsection