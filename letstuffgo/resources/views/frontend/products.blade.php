@extends('layouts.frontend_base')

@section('content')
	<div id="divImg">
		<img src="{{ asset('static/website/themes/images/fulda2.jpg') }}" alt="" class="img img-responsive">
	</div>

	<!-- ****** Body part start ****** -->
	<div id="mainBody">
		<div class="container">
			<div class="row">
				
				<!-- ****** Sidebar start ****** -->
				@include('frontend.include.sidebar')
				<!-- ******* Sidebar end ******* -->

				<div class="span9">
					<ul class="breadcrumb">
						<li><a href="index.html">Home</a> <span class="divider">/</span></li>
						<li class="active">Products Name</li>
					</ul>
					<h3> Products Name <small class="pull-right"> 40 products are available </small></h3>
					<hr class="soft"/>
					<p>
						Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - that is why our goods are so popular and we have a great number of faithful customers all over the country.
					</p>
					<hr class="soft"/>

					<div class="tab-pane  active" id="blockView">
						<ul class="thumbnails">
							<li class="span3">
								<div class="thumbnail">
									<a href="product_details.html"><img src="{{ asset('static/website/themes/images/products/3.jpg') }}" alt=""/></a>
									<div class="caption">
										<h5>Manicure &amp; Pedicure</h5>
										<p>
											I'm a paragraph. Click here
										</p>
										<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
									</div>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail">
									<a href="product_details.html"><img src="{{ asset('static/website/themes/images/products/3.jpg') }}" alt=""/></a>
									<div class="caption">
										<h5>Manicure &amp; Pedicure</h5>
										<p>
											I'm a paragraph. Click here
										</p>
										<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
									</div>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail">
									<a href="product_details.html"><img src="{{ asset('static/website/themes/images/products/3.jpg') }}" alt=""/></a>
									<div class="caption">
										<h5>Manicure &amp; Pedicure</h5>
										<p>
											I'm a paragraph. Click here
										</p>
										<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
									</div>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail">
									<a href="product_details.html"><img src="{{ asset('static/website/themes/images/products/3.jpg') }}" alt=""/></a>
									<div class="caption">
										<h5>Manicure &amp; Pedicure</h5>
										<p>
											I'm a paragraph. Click here
										</p>
										<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
									</div>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail">
									<a href="product_details.html"><img src="{{ asset('static/website/themes/images/products/3.jpg') }}" alt=""/></a>
									<div class="caption">
										<h5>Manicure &amp; Pedicure</h5>
										<p>
											I'm a paragraph. Click here
										</p>
										<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
									</div>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail">
									<a href="product_details.html"><img src="{{ asset('static/website/themes/images/products/3.jpg') }}" alt=""/></a>
									<div class="caption">
										<h5>Manicure &amp; Pedicure</h5>
										<p>
											I'm a paragraph. Click here
										</p>
										<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
									</div>
								</div>
							</li>
						</ul>
						<hr class="soft"/>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ****** Body part end ****** -->

@endsection