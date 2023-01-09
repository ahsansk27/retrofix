@extends('frontend.layout.master')
@section('content')
    
      <div id="content">
		<div class="entry-content">

			<div class="page-title">
				<div class="container">
					<h1>Login</h1>
				</div>
			</div>

			<div class="breadcrumbs">
				<div class="container">
					<ul class="crumb">
						<li><a href="#"><i class="fa fa-home"></i> Home</a></li> <span>/</span>
						<li class="active"> Login</li>
					</ul>
				</div>
			</div>

			<div class="page-content">
				<section class="form-info">
					<div class="container">
						<div class="row">

						

							<div class="col-md-12">
								<div class="contact-form">
			           <form action="{{route('login-post')}}" method="post" style="border: 1px solid #75737585;padding: 80px 15px;width: 50%; margin-left: auto; margin-right: auto;">
        @csrf
        <h3 style="text-align: center;text-transform: uppercase;font-size: 30px; font-weight: 800;">Login</h3>
        <div class="input-group mb-3" style="width: 100%;margin-bottom: 10px;">
          <input type="email" name="email" class="form-control" placeholder="Email" >
         
        </div>
        <div class="input-group mb-3" style="width: 100%;margin-bottom: 10px;">
          <input type="password" name="password" class="form-control" placeholder="Password" >
         
        </div>
        <div class="row" style="text-align:center;width: 50%; margin-left: auto;margin-right: auto;">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-8">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

								</div>
							</div>

						</div>
					</div>
				</section>

			</div>

		</div>		
	</div>
      
@endsection