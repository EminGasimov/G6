<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LetStuffGo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('static/website/themes/images/ico/favicon1.ico') }}">
	<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="{{ asset('static/website/themes/js/less.js" type="text/javascript') }}"></script> -->
	
	<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="{{ asset('static/website/themes/bootshop/bootstrap.min.css') }}" media="screen"/>
    <link href="{{ asset('static/website/themes/css/base.css') }}" rel="stylesheet" media="screen"/>
	<!-- Bootstrap style responsive -->	
	<link href="{{ asset('static/website/themes/css/bootstrap-responsive.min.css') }}" rel="stylesheet"/>
	<link href="{{ asset('static/website/themes/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
	<!-- Google-code-prettify -->	
	<link href="{{ asset('static/website/themes/js/google-code-prettify/prettify.css') }}" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- fav and touch icons -->
    {{-- 
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style> --}}

	<!-- Online Bootstrap Link -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
</head>
<body>
	<div id="header">
		<div class="container">
			<div id="welcomeLine" class="row">
				<div class="span6">Welcome to <strong> LetStuffGo</strong></div>
				<div class="span6">
					<div class="pull-right">
						<!-- <a href="product_summary.html"><span class="">Fr</span></a>
						<a href="product_summary.html"><span class="">Es</span></a>
						<span class="btn btn-mini">En</span>
						<a href="product_summary.html"><span>&pound;</span></a>
						<span class="btn btn-mini">$155.00</span>
						<a href="product_summary.html"><span class="">$</span></a> -->
						<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Items in your cart </span> </a> 
					</div>
				</div>
			</div>
			<!-- ****** Navbar ****** -->
			<div id="logoArea" class="navbar">
				<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<div class="navbar-inner">
					<a class="brand" href="/"><img src="{{ asset('static/website/themes/images/logo.png') }}" alt="LetStuffGo"/></a>
					<form class="form-inline navbar-search" method="post" action="products.html">
						<input id="srchFld" class="srchTxt" placeholder="search" type="text"/>
						<!-- <select class="srchTxt">
							<option>All</option>
							<option>CLOTHES </option>
							<option>FOOD AND BEVERAGES </option>
							<option>HEALTH & BEAUTY </option>
							<option>SPORTS & LEISURE </option>
							<option>BOOKS & ENTERTAINMENTS </option>
						</select>  -->
						<button type="submit" id="submitButton" class="btn btn-primary">Search</button>
					</form>
					<ul id="topMenu" class="nav pull-right">
						<li class=""><a href="special_offer.html">Home</a></li>
						<li class=""><a href="normal.html">Contact</a></li>
						<li class=""><a href="contact.html">About us</a></li>
						<li class="">
							<a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
							<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
									<h3>Registered members can Login</h3>
								</div>
								<div class="modal-body">
									<form class="form-horizontal loginFrm">
										<div class="control-group">								
											<input type="text" id="inputEmail" placeholder="Username or Email">
										</div>
										<br>
										<div class="control-group">
											<input type="password" id="inputPassword" placeholder="Password">
										</div>
										<br>
										<div class="control-group">
											<label class="checkbox">
												<input type="checkbox"> Remember me
											</label>
											<p style="font-size: 15px;">New here? Then <b><a href="/register" style="color: darkslateblue;">Register</a> </b>first.</p>
										</div>
									</form>		
									<button type="submit" class="btn btn-success">Login</button>
									<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- ******* Header End ****** -->

	@yield('content')

	<!-- ****** Footer part start ****** -->
	<div  id="footerSection">
		<div class="container">
			<div class="row">
				<div class="span4">
					<h5>ACCOUNT</h5>
					<a href="login.html">YOUR ACCOUNT</a>
					<a href="login.html">PERSONAL INFORMATION</a> 
					<a href="login.html">ADDRESSES</a> 
					<!-- <a href="login.html">DISCOUNT</a>  
					<a href="login.html">ORDER HISTORY</a> -->
				</div>
				<div class="span4">
					<h5>INFORMATION</h5>
					<a href="contact.html">CONTACT</a>  
					<!-- <a href="register.html">REGISTRATION</a>  
					<a href="legal_notice.html">LEGAL NOTICE</a>   -->
					<a href="tac.html">TERMS AND CONDITIONS</a> 
					<a href="faq.html">FAQ</a>
				</div>
				<!-- <div class="span3">
					<h5>OUR OFFERS</h5>
					<a href="#">NEW PRODUCTS</a> 
					<a href="#">TOP SELLERS</a>  
					<a href="special_offer.html">SPECIAL OFFERS</a>  
					<a href="#">MANUFACTURERS</a> 
					<a href="#">SUPPLIERS</a> 
				</div> -->
				<div id="socialMedia" class="span4 pull-right">
					<h5>SOCIAL MEDIA </h5>
					<a href="www.facebook.com"><i class="fa fa-facebook" style="font-size:35px; color:#4267B2;"></i></a>
					<a href="www.youtube.com"><i class="fa fa-youtube" style="font-size:35px; color:#FF0000;"></i></a>
					<!-- <a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
					<a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
					<a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a> -->
				</div> 
			</div>
			<br>
			<p class="pull-right">&copy; Copyright reserved by <b>GDSD-G6</b>, 2019</p>
		</div>
		<!-- ****** Container End ****** -->
	</div>
	<!-- ****** Footer part end ****** -->

	<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="{{ asset('static/website/themes/js/jquery.js') }}" type="text/javascript"></script>
	<script src="{{ asset('static/website/themes/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('static/website/themes/js/google-code-prettify/prettify.js') }}"></script>
	<script src="{{ asset('static/website/themes/js/bootshop.js') }}"></script>
    <script src="{{ asset('static/website/themes/js/jquery.lightbox-0.5.js') }}"></script>
</body>
</html>