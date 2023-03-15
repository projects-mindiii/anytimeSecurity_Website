<style>
	label {
		font-weight:normal !important
	}
	</style>
<div class="container-fluid">
		<!-- Start: Include header page -->
		
		<!-- End: Include header page -->
		<div style="margin-top: 102px;">
			<div class="contact-area">
				<div class="row">
					<div align="center">
						<span class="font-2x text-theme-color">Contact Us</span>
					</div>
					<div  align="center">
					</div>
				</div>
				<div class="row m-t-40">
					<div class="col-md-6">
						<img src="assets/images/img-3.png"  width="100%"/>
						<p class="m-t-10">
							We would love to help you, please provide your contact details
						</p>
					</div>
					<div class="col-md-6">
						<form role="form" action="<?php echo base_url('contact-us')?>" method="POST" enctype="multipart/form-data" id="contactus_form">
							<div class="col-md-12">
								<div class="col-md-6 p-r-0 p-l-0">
									<div class="form-group">
										<input type="text" name="fname" class="form-control custom-form" placeholder="First Name" required>
									</div>
								</div>
								<div class="col-md-6 p-l-10 p-r-0 p-l-10-sm">
									<div class="form-group">
										<input type="text" name="lname" class="form-control custom-form" placeholder="Last Name" required>
									</div>
								</div>
								<div class="form-group">
									<input type="email" name="email" class="form-control custom-form " placeholder="Email Address" required>
								</div>
									<div class="col-md-6 p-r-0 p-l-0">
									<div class="form-group">
										<input type="text" name="phone" class="form-control custom-form" placeholder="Phone" required>
									</div>
								</div>
								<div class="col-md-6 p-l-10 p-r-0 p-l-10-sm">
									<div class="form-group">
										<input type="text" name="country" class="form-control custom-form" placeholder="Country" required>
									</div>
								</div>
								<div class="form-group">
										<select name="state" id="state" class="form-control custom-form" required>
											  <option value="">Select a State*</option>
											  <option value="AL">Alabama</option>
											  <option value="AK">Alaska</option>
											  <option value="AZ">Arizona</option>
											  <option value="AR">Arkansas</option>
											  <option value="CA">California</option>
											  <option value="CO">Colorado</option>
											  <option value="CT">Connecticut</option>
											  <option value="DE">Delaware</option>
											  <option value="DC">District Of Columbia</option>
											  <option value="FL">Florida</option>
											  <option value="GA">Georgia</option>
											  <option value="HI">Hawaii</option>
											  <option value="ID">Idaho</option>
											  <option value="IL">Illinois</option>
											  <option value="IN">Indiana</option>
											  <option value="IA">Iowa</option>
											  <option value="KS">Kansas</option>
											  <option value="KY">Kentucky</option>
											  <option value="LA">Louisiana</option>
											  <option value="ME">Maine</option>
											  <option value="MD">Maryland</option>
											  <option value="MA">Massachusetts</option>
											  <option value="MI">Michigan</option>
											  <option value="MN">Minnesota</option>
											  <option value="MS">Mississippi</option>
											  <option value="MO">Missouri</option>
											  <option value="MT">Montana</option>
											  <option value="NE">Nebraska</option>
											  <option value="NV">Nevada</option>
											  <option value="NH">New Hampshire</option>
											  <option value="NJ">New Jersey</option>
											  <option value="NM">New Mexico</option>
											  <option value="NY">New York</option>
											  <option value="NC">North Carolina</option>
											  <option value="ND">North Dakota</option>
											  <option value="OH">Ohio</option>
											  <option value="OK">Oklahoma</option>
											  <option value="OR">Oregon</option>
											  <option value="PA">Pennsylvania</option>
											  <option value="RI">Rhode Island</option>
											  <option value="SC">South Carolina</option>
											  <option value="SD">South Dakota</option>
											  <option value="TN">Tennessee</option>
											  <option value="TX">Texas</option>
											  <option value="UT">Utah</option>
											  <option value="VT">Vermont</option>
											  <option value="VA">Virginia</option>
											  <option value="WA">Washington</option>
											  <option value="WV">West Virginia</option>
											  <option value="WI">Wisconsin</option>
											  <option value="WY">Wyoming</option>
										</select>
									</div>
								<div class="form-group">
									<input type="text" name="city" class="form-control custom-form" placeholder="City" required>
								</div>
								<div class="form-group">
										<input type="text" name="zip_code" class="form-control custom-form" value="" placeholder="Zip Code" required>
									</div>
								<div>
									<button type="submit" class="btn btn-full-width btn-blue">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url('assets/js/jquery.validate.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/additional-methods.min.js')?>"></script>


	

	<!-- Validate Contact Us Form -->
	<script>
	$.validator.addMethod("isEmail", function(value, element) {
	// allow any non-whitespace characters as the host part
	return this.optional( element ) || /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test( value );
	}, 'Please enter a valid email address.');

	$.validator.addMethod("isPhone", function(value, element) {
	// allow any non-whitespace characters as the host part
	return this.optional( element ) || /^\d{10}$/.test( value );
	}, 'Please enter a valid phone.');

	$.validator.addMethod("isZipcode", function(value, element) {
	// allow any non-whitespace characters as the host part
	return this.optional( element ) || /(^\d{5}$)|(^\d{5}-\d{4}$)/.test( value );
	}, 'Please enter a valid zipcode.');
	

	

	$('form#contactus_form').validate({
		rules:{
			fname:'required',
			lname:'required',
			email: {
				required:true,
				isEmail:true
			},
			phone:{
				required:true,
				number:true,
				isPhone:true
			},
			country:'required',
			state:'required',
			city:'required',
			zip_code:{
				required:true,
				isZipcode:true	
			}
		},
		messages:{
			fname:{
				required:'First Name is required'	
			},
			lname:{
				required:'Last Name is required'
			},
			email: {
				required:"Email is required"
			},
			phone:{
				required:"Phone is required",
				number:"Enter Number only"
			},
			country: {
				required:"Country is required"
			},
			state:{
				required:'State is required'
			},
			city: {
				required:"City is required"
			},
			zip_code: {
				required:"Zip Code is required"
			}
		},
		submitHandler:function(form, event) {
			event.preventDefault();
			form.submit();
		}
	});
	</script>
