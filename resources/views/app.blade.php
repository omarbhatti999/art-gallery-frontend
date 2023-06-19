<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>Elephantus - Art Gallery</title>
	
    <meta name="description" content="">
	<meta name="author" content="">
	
	<!--[if lt IE 9]>
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />    
    
    <!-- **CSS - stylesheets** -->
	<link id="default-css" rel="stylesheet" href="{{asset('style.css')}}" type="text/css" media="all" />

    <link type="text/css" rel="stylesheet" href="{{asset('js/custom-scroll/mCustomScrollbar.css')}}">
	
    <!-- **Additional - stylesheets** -->
    {{-- <link href="{{asset('css/animations.css')}}" rel="stylesheet" type="text/css" media="all" /> --}}
	<link id="shortcodes-css" href="{{asset('css/shortcodes.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link id="skin-css" href="{{asset('skins/brown/style.css')}}" rel="stylesheet" media="all" />
    <link href="{{asset('css/isotope.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/pace.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" media="all"/>
    
    <link id="light-dark-css" href="{{asset('dark/dark.css')}}" rel="stylesheet" media="all" />

    <!-- **Font Awesome** -->
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css" />
	
	<!-- Modernizr -->
	<script src="{{asset('js/modernizr.js')}}"></script> 
	@vite('resources/css/app.css')
</head>
<body>
<div class="wrapper">
	<div class="inner-wrapper">
		<div id="app"></div>
		</div>
</div>
	@vite('resources/js/app.js')

	
<!-- **jQuery** -->
 
	<script src="{{asset('js/jquery-1.11.2.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('js/jquery.inview.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.viewport.js')}}" type="text/javascript"></script>
    
    <script type="text/javascript" src="{{asset('js/jquery.isotope.min.js')}}"></script>
    
	<script src="{{asset('js/jsplugins.js')}}" type="text/javascript"></script>    
    
	<script src="{{asset('js/jquery.prettyPhoto.js')}}" type="text/javascript"></script>    
    
	<script src="{{asset('js/jquery.validate.min.js')}}" type="text/javascript"></script>    
    
    <script src="{{asset('js/jquery.tipTip.minified.js')}}" type="text/javascript"></script>    
    
    <script type="text/javascript" src="{{asset('js/jquery.bxslider.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/custom-scroll/mCustomScrollbar.min.js')}}"></script>
       
	<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>