@extends('layouts.frontend_base')

@section('content')
<div id="divImg">
	<img src="{{ asset('static/website/themes/images/fulda2.jpg') }}" alt="" class="img img-responsive">
</div>
<div id="mainBody">
		<div class="container">
			<div class="row">
				{{-- <!-- ****** Sidebar ****** -->
				<div id="sidebar" class="span3">
					<ul id="sideManu" class="nav nav-tabs nav-stacked">
						<li class="subMenu open"><a> ELECTRONICS [230]</a>
							<ul>
								<li>
									<a class="active" href="products.html"><i class="icon-chevron-right"></i>Cameras (100) </a>
								</li>
								<li>
									<a href="products.html"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a>
								</li>
								<li>
									<a href="products.html"><i class="icon-chevron-right"></i>Mobile Phone (80)</a>
								</li>
								<li>
									<a href="products.html"><i class="icon-chevron-right"></i>Sound & Vision (15)</a>
								</li>
							</ul>
						</li>
						<li class="subMenu"><a> CLOTHES [840] </a>
							<ul style="display:none">
								<li>
									<a href="products.html"><i class="icon-chevron-right"></i>Women's Clothing (45)</a>
								</li>
								<li>
									<a href="products.html"><i class="icon-chevron-right"></i>Women's Shoes (8)</a>
								</li>												
								<li>
									<a href="products.html"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a>
								</li>	
								<li>
									<a href="products.html"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a>
								</li>
								<li>
									<a href="products.html"><i class="icon-chevron-right"></i>Men's Shoes (6)</a>
								</li>												
								<li>
									<a href="products.html"><i class="icon-chevron-right"></i>Kids Clothing (5)</a>
								</li>												
								<li>
									<a href="products.html"><i class="icon-chevron-right"></i>Kids Shoes (3)</a>
								</li>												
							</ul>
						</li>
						<li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
							<ul style="display:none">
								<li>
									<a href="products.html"><i class="icon-chevron-right"></i>Angoves  (35)</a>
								</li>
								<li>
									<a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a>
								</li>												
								<li>
									<a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a>
								</li>	
								<li>
									<a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a>
								</li>
								<li>
									<a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a>
								</li>												
								<li>
									<a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a>
								</li>												
								<li>
									<a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a>
								</li>												
								<li>
									<a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a>
								</li>												
							</ul>
						</li>
						<li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
						<li><a href="products.html">SPORTS & LEISURE [58]</a></li>
						<li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>
					</ul>
					<br/>
					<div class="thumbnail">
						<img src="themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera"/>
						<div class="caption">
							<h5>Panasonic</h5>
							<h4 style="text-align:center">
								<a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> 
								<a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> 
								<a class="btn btn-primary" href="#">$222.00</a>
							</h4>
						</div>
					</div>
					<br/>
					<div class="thumbnail">
						<img src="themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
						<div class="caption">
							<h5>Kindle</h5>
							<h4 style="text-align:center">
								<a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> 
								<a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> 
								<a class="btn btn-primary" href="#">$222.00</a>
							</h4>
						</div>
					</div>
					<br/>
					<div class="thumbnail">
						<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
						<div class="caption">
							<h5>Payment Methods</h5>
						</div>
					</div>
				</div>
				<!-- ******* Sidebar end ******* --> --}}
				<div class="span9">
					<ul class="breadcrumb">
						<li><a href="index.html">Home</a> <span class="divider">/</span></li>
						<li class="active">Registration</li>
					</ul>
					<h3> Registration</h3>	
					<div class="well">
						<!--
						<div class="alert alert-info fade in">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
						</div>
						<div class="alert fade in">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
						</div>
						<div class="alert alert-block alert-error fade in">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
						</div> -->
						<form class="form-horizontal" >
							
							<h4>Your personal information</h4>
							<div class="control-group">
								<label class="control-label">Title <sup>*</sup></label>
								<div class="controls">
									<select class="span1" name="days">
										<option value="">-</option>
										<option value="1">Mr.</option>
										<option value="2">Mrs</option>
										<option value="3">Miss</option>
									</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputFname1">First name <sup>*</sup></label>
								<div class="controls">
									<input type="text" id="inputFname1" placeholder="First Name">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputLnam">Last name <sup>*</sup></label>
								<div class="controls">
									<input type="text" id="inputLnam" placeholder="Last Name">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input_email">Email <sup>*</sup></label>
								<div class="controls">
									<input type="text" id="input_email" placeholder="Email">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
								<div class="controls">
									<input type="password" id="inputPassword1" placeholder="Password">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Date of Birth <sup>*</sup></label>
								<div class="controls">
								<!-- <select class="span1" name="days">
										<option value="">-</option>
											<option value="1">1&nbsp;&nbsp;</option>
											<option value="2">2&nbsp;&nbsp;</option>
											<option value="3">3&nbsp;&nbsp;</option>
											<option value="4">4&nbsp;&nbsp;</option>
											<option value="5">5&nbsp;&nbsp;</option>
											<option value="6">6&nbsp;&nbsp;</option>
											<option value="7">7&nbsp;&nbsp;</option>
									</select> -->
									<form action="/action_page.php">
										<input type="date" name="bday">
										<!-- <input type="submit"> -->
									</form>
								</div>
							</div>

							<h4>Your address</h4>
							<div class="control-group">
								<label class="control-label" for="inputFname">First name <sup>*</sup></label>
								<div class="controls">
									<input type="text" id="inputFname" placeholder="First Name">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputLname">Last name <sup>*</sup></label>
								<div class="controls">
									<input type="text" id="inputLname" placeholder="Last Name"/>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="company">Company</label>
								<div class="controls">
									<input type="text" id="company" placeholder="company"/>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="address">Address<sup>*</sup></label>
								<div class="controls">
									<input type="text" id="address" placeholder="Adress"/> 
									<span>Street address, P.O. box, company name, c/o</span>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="address2">Address (Line 2)<sup>*</sup></label>
								<div class="controls">
									<input type="text" id="address2" placeholder="Adress line 2"/> <span>Apartment, suite, unit, building, floor, etc.</span>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="city">City<sup>*</sup></label>
								<div class="controls">
									<input type="text" id="city" placeholder="city"/> 
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="state">State<sup style="color: red;">*</sup></label>
								<div class="controls">
									<input type="text" id="state" placeholder="state">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="postcode">Zip / Postal Code<sup>*</sup></label>
								<div class="controls">
									<input type="text" id="postcode" placeholder="Zip / Postal Code"/> 
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="country">Country<sup>*</sup></label>
								<div class="controls">
									<select id="country" >
										<option value="">-</option>
										<option value="1">Country</option>
									</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="aditionalInfo">Additional information</label>
								<div class="controls">
									<textarea name="aditionalInfo" id="aditionalInfo" cols="26" rows="3">Additional information</textarea>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="phone">Home phone <sup>*</sup></label>
								<div class="controls">
									<input type="text"  name="phone" id="phone" placeholder="phone"/> <span>You must register at least one phone number</span>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="mobile">Mobile Phone </label>
								<div class="controls">
									<input type="text"  name="mobile" id="mobile" placeholder="Mobile Phone"/> 
								</div>
							</div>
							<p><sup>*</sup>Required field	</p>
							<div class="control-group">
								<div class="controls">
									<input type="hidden" name="email_create" value="1">
									<input type="hidden" name="is_new_customer" value="1">
									<input class="btn btn-large btn-success" type="submit" value="Register" />
								</div>
							</div>		
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection