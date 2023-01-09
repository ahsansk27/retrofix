
<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/classie.js')}}"></script>
<script type="text/javascript"> 
(function($) { "use strict";
	$('.vimeo a,.youtube a').click(function (e) {
		e.preventDefault();
		var videoLink = $(this).attr('href');
		var classeV = $(this).parent();
		var PlaceV = $(this).parent();
		if ($(this).parent().hasClass('youtube')) {
			$(this).parent().wrapAll('<div class="video-wrapper">');
			$(PlaceV).html('<iframe frameborder="0" height="333" src="' + videoLink + '?autoplay=1&showinfo=0" title="YouTube video player" width="100%"></iframe>');
		} else {
			$(this).parent().wrapAll('<div class="video-wrapper">');
			$(PlaceV).html('<iframe src="' + videoLink + '?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1&amp;color=cfa144" width="100%" height="300" frameborder="0"></iframe>');
		}
	});		
})(jQuery);
</script>
<script type="text/javascript" src="{{asset('frontend/js/custom-index.js')}}"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="{{asset('frontend/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('frontend/js/revslider-custom.js')}}"></script>
