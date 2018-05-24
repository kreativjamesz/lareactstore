@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="header-banner mb-5" style="width:100%;height:300px;background:url('images/arts/SOGbenaiahwithhorsecoverLO.jpg')no-repeat center center fixed;background-size: cover;position: relative;">
					<div class="hero-text">
    					<h1 style="font-size:50px">Be A Hero</h1>
					    <p>Join Our Partnership</p>
					    <a href="#donate">Get Started</a>
				  	</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col" style="border-right:1px solid red;margin-right:-1px;">
				<div class="donations">
					<h1>All Donations are Tax Deductible </h1>
					<hr>
					<h2>Subscribe below to help Operation Hope monthly.</h2>
					<div class="donate" style="margin-top: 30px;">
						<form action="https://www.paypal.com/cgi-bin/webscr" method="POST">
							<p style="margin:0px;padding:0px;">Support Levels</p>
							<select class="c-select w-75 my-2">
								<option value="Level1">Level1 : $5.00 USD - monthly</option>
								<option value="Level 2">Level 2 : $10.00 USD - monthly</option>
								<option value="Level 3">Level 3 : $20.00 USD - monthly</option>
								<option value="Level 4">Level 4 : $50.00 USD - monthly</option>
								<option value="Level 5">Level 5 : $75.00 USD - monthly</option>
								<option value="Level 6">Level 6 : $100.00 USD - monthly</option>
							</select>
							<input class="w-25" type="hidden" name="currency_code" value="USD"/>
							<input class="w-25" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"/>
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"/>
						</form>
					</div>
					<h2 class="wsite-content-title" style="text-align:left;"><font size="4">Partnerships of $100 or more monthly will get your name or family name included as a producer in DMC productions.&nbsp;</font></h2>
					<div class="wsite-spacer" style="height:38px;display:block;"></div>
					<h2 class="wsite-content-title" style="text-align:left;">For one time donations choose the amount below.</h2>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="POST">
						<p style="margin:0px;padding:0px;">Support Levels</p>
						<select class="c-select w-75 my-2">
							<option value="Level 1">Level 1 $10.00 USD</option>
							<option value="Level 2">Level 2 $20.00 USD</option>
							<option value="Level 3">Level 3 $50.00 USD</option>
							<option value="Level 4">Level 4 $100.00 USD</option>
							<option value="Level 5">Level 5 $500.00 USD</option>
							<option value="Level 10">Level 10 $1,000.00 USD</option>
						</select>
						<input class="w-25" type="hidden" name="currency_code" value="USD"/>
						<input class="w-25" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"/>
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"/>
					</form>
					<div class="wsite-spacer" style="height:50px;display:block;"></div>
					<h5 class="wsite-content-title" style="text-align:left;">For mailing options<br>P.O. BOX 192193&nbsp;<br>&#8203;Dallas TX 75219</h5>
					<h5 class="wsite-content-title" style="text-align:left;">Include name and address and we will ensure you have access to the latest <br>comic books, T Shirts and online content!&nbsp;</h5>
				</div>
			</div>
			<div class="col">
				<h2 class="wsite-content-title">For more Information About&nbsp;<br>&#8203;Operation Hope<br></h2>
				<label class="wsite-form-label wsite-form-fields-required-label"><span class="form-required">*</span> Indicates required field</label>
				<form>
					<div class="row">
						<div class="col">
							<fieldset class="form-group">
								<label for="firstname">Firstname</label>
								<input type="text" class="form-control" id="firstname" placeholder="Example input">
							</fieldset>
						</div>
						<div class="col">
							<fieldset class="form-group">
								<label for="lastname">Lastname</label>
								<input type="text" class="form-control" id="lastname" placeholder="Example input">
							</fieldset>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<fieldset class="form-group">
								<label for="email">Email</label>
								<input type="text" class="form-control" id="email" placeholder="Example input">
							</fieldset>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<fieldset class="form-group">
								<label for="address">Address</label>
								<textarea class="form-control" placeholder="Enter Address..."></textarea>
							</fieldset>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<fieldset class="form-group">
								<label for="line1">Line 1</label>
								<textarea class="form-control" placeholder="Address..."></textarea>
							</fieldset>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<fieldset class="form-group">
								<label for="line2">Line 2</label>
								<textarea class="form-control" placeholder="Address..."></textarea>
							</fieldset>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<fieldset class="form-group">
								<label for="city">City</label>
								<input type="text" class="form-control" id="city" placeholder="Enter you City">
							</fieldset>
						</div>
						<div class="col">
							<fieldset class="form-group">
								<label for="state">State</label>
								<input type="text" class="form-control" id="state" placeholder="Enter your State">
							</fieldset>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<fieldset class="form-group">
								<label for="zipcode">Zip Code</label>
								<input type="text" class="form-control" id="zipcode" placeholder="Enter Zip Code">
							</fieldset>
						</div>
						<div class="col">
							<fieldset class="form-group">
								<label for="country">Country</label>
								<input type="text" class="form-control" id="country" placeholder="Enter Country">
							</fieldset>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<fieldset class="form-group">
								<label for="comment">Comment</label>
								<textarea class="form-control" placeholder="Your Comment..."></textarea>
							</fieldset>
						</div>
					</div>
					<button type="submit" class="btn btn-success flat">SUBMIT</button>
				</form>
			</div>
		</div>
	</div>
@endsection