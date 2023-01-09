
   
	<header class="static">		
		<div class="container">
			<h1 class="logo" style="width: 30%;">
				<a href="/"><img src="{{ asset('/frontend/images/logo.jpeg') }}" alt="" style="width: 18%;"></a>
			</h1>						
			<div class="top-info">
				<p><span>Free Call:</span> (+1)-96-716-6879</p>
				<p class="e-mail"><span>Email:</span> <a href="#">contact@site.com</a></p>
				<div class="socials">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div>
			</div>
			<button class="btn-toggle"><i class="fa fa-reorder"></i></button>
			<nav class="nav">				
				<ul class="main-menu">
				<li><a href="{{route('home')}}">Home</a></li>
				<li><a href="{{route('freelancer')}}">Freelancer</a></li>
				<li><a href="{{route('services')}}">Services</a></li>
				<li><a href="{{route('about')}}">About Us</a></li>
				@if(isset(auth()->user()->id))					
				<li><a href="{{route('setting')}}">Setting</a></li>					
					@endif
				</ul>
			</nav>	
		</div>
	</header>
