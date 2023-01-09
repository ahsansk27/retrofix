<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Retrofix</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Font
  ================================================== -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/frontend/images/logo.jpeg') }}" />
	<!-- CSS
  ================================================== -->
  @include('frontend.include.style')
  @include('frontend.include.header')
   
	<!-- Favicons
	================================================== -->
	
</head>
<body class="homepage">
	<div class="images-preloader">
	    <div id="preloader_1" class="rectangle-bounce">
	        <span></span>
	        <span></span>
	        <span></span>
	        <span></span>
	        <span></span>
	    </div>
	</div>	
	<div class="top-line"></div>

	   @yield('content')

      @include('frontend.include.footer')
    
   
	<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
@include('frontend.include.script')
      @yield('page-script')

</body>
</html>
@include('frontend.include.style')
      @yield('page-style')
      