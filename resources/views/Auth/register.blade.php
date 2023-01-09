@extends('frontend.layout.master')
@section('content')
    
      <div id="content">
		<div class="entry-content">

			<div class="page-title">
				<div class="container">
					<h1>Register</h1>
				</div>
			</div>

			<div class="breadcrumbs">
				<div class="container">
					<ul class="crumb">
						<li><a href="#"><i class="fa fa-home"></i> Home</a></li> <span>/</span>
						<li class="active"> Register</li>
					</ul>
				</div>
			</div>

			<div class="page-content">
				<section class="form-info">
					<div class="container">
						<div class="row">

						

							<div class="col-md-12">
								<div class="contact-form">
                <form action="{{route('register-user')}}" method="post" style="
    width: 50%;
    margin-left: auto;
    margin-right: auto;
    display: block;
">
      @csrf
        <div class="input-group mb-3" style="width: 100%;margin-bottom: 10px;">
          <input type="text" name="name" class="form-control" placeholder="Full name">
         
        </div>
       
        <div class="input-group mb-3" style="width: 100%;margin-bottom: 10px;">
          <input type="email" name="email" class="form-control" placeholder="Email">
       
        </div>
        <div class="input-group mb-3" style="width: 100%;margin-bottom: 10px;">
          <input type="password" name="password" class="form-control" placeholder="Password">
        
        </div>
        <div class="input-group mb-3" style="width: 100%;margin-bottom: 10px;">
          <input type="password" name="confirm_password" class="form-control" placeholder="Retype password">
        
        </div>
        <div class="form-group"style="width: 100%;margin-bottom: 10px;">
           <label>Type</label>
            <select name="type" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
             <option value="0">Freelancer</option>
             <option value="1">User</option>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4" style="
    margin-left: auto;
    margin-right: auto;
    float: none;
">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
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
     
