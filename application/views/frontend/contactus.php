<style>
	label {
		font-weight: normal !important
	}

	.col-lg-6 {
		width: 100%;
	}

	#thank-you-popup1 {
		position: fixed;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		background-color: green;
		border: 1px solid #ccc;
		padding: 20px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
		z-index: 9999;
		color: white;
	}

	#thank-you-popup2 {
		position: fixed;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		background-color: red;
		border: 1px solid #ccc;
		padding: 20px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
		z-index: 9999;
		color: white;
	}

	.loaderShade {
		position: fixed;
		top: 0px;
		left: 0px;
		width: 100%;
		height: 100%;
		background-color: #000;
		opacity: 0.8;
		overflow: hidden;
		z-index: 999;
	}

	.loader {
		background: #00000017;
		width: 100%;
		height: 100%;
		z-index: 9999;
	}

	.loader img {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		z-index: 99999;
		width: 100px;
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
				<div align="center">
				</div>
			</div>
			<div class="row m-t-40">
				<div class="col-md-6">
					<img src="assets/images/img-3.png" width="100%" />
					<p class="m-t-10">
						We would love to help you, please provide your contact details
					</p>
				</div>
				<div class="col-md-6">
					<form role="form" action="<?php echo base_url('contact-us-save') ?>" method="POST" enctype="multipart/form-data" id="contactus_form">
						<div class="col-md-12">
							<div class="row">

							</div>
							<div class="row">
								<div class="col-md-6 p-r-0 p-l-0">
									<div class="form-group">
										<input type="text" name="fname" class="form-control custom-form" placeholder="First Name">
									</div>
								</div>
								<div class="col-md-6 p-l-10 p-r-0 p-l-10-sm">
									<div class="form-group">
										<input type="text" name="lname" class="form-control custom-form" placeholder="Last Name">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 p-r-0 p-l-0">
									<div class="form-group">
										<input type="email" name="email" class="form-control custom-form " placeholder="Email Address">
									</div>
								</div>
								<div class="col-md-6 p-l-10 p-r-0 p-l-10-sm">
									<div class="form-group">
										<input type="text" id="phone_number" name="phone" class="form-control custom-form" maxlength="23" placeholder="Phone*">
										<!--  <img src="assets/Thumbnails/contact/Phone.png" height="70px" width="100px"> -->
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 p-r-0 p-l-0">
									<div class="form-group">
										<!-- <input type="text" name="country" class="form-control custom-form" placeholder="Country*" required=""> -->
										<!-- <i class="fa fa-caret-down" aria-hidden="true"></i> -->
										<select name="country" id="country" class="form-control custom-form">
											<option value="" selected>Select Country*</option>
											<?php
											foreach ($countries as $c) { ?>
												<option value="<?php echo $c['id'] ?>"><?php echo $c['name'] ?></option>
											<?php }
											?>
										</select>
									</div>
								</div>
								<div class="col-md-6 p-l-10 p-r-0 p-l-10-sm">
									<div class="form-group">
										<select name="state" id="states" class="form-control custom-form">
											<option value="" disabled selected>Select State*</option>
										</select>
										<!-- <i class="fa fa-caret-down" aria-hidden="true"></i> -->
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 p-r-0 p-l-0">
									<div class="form-group">
										<!-- <input type="text" name="city" class="form-control custom-form" placeholder="City*"> -->
										<select name="city" id="city" class="form-control custom-form">
											<option value="" disabled selected>Select City*</option>
										</select>
									</div>
								</div>
								<div class="col-md-6 p-l-10 p-r-0 p-l-10-sm">
									<div class="form-group">
										<input type="text" name="zip_code" class="form-control custom-form" value="" maxlength="9" placeholder="Zip Code">
									</div>
								</div>
							</div>
							<div class="row">
								<div class=" resultstep-4 resultstep-c">
									<div class="">
										<div class="form-group"> <label class="font-4x text-theme-color">Best Time and Date to Reach You</label> </div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 p-r-0 p-l-0">
									<div class="form-group">
										<input type="text" name="reach_time" class="form-control custom-form timepicker" placeholder="Time">
									</div>
								</div>
								<div class="col-md-6 p-l-10 p-r-0 p-l-10-sm">
									<div class="form-group">
										<input type="text" name="reach_date" class="form-control custom-form datepicker" placeholder="Date" readonly="readonly">
									</div>
								</div>
							</div>

							<div class="row">
								<button type="submit" class="btn btn-full-width btn-blue" value="submit">Submit</button>
							</div>
							<div class="loader loaderShade" style="display: none;">
								<img src="<?php echo base_url('assets/Thumbnails/allsecurity/loading.gif') ?>" alt="">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo base_url('assets/js/jquery.validate.min.js') ?>"></script>
<script src="<?php echo base_url() ?>assets/js/contact_form.js" type="text/javascript"></script>




<!-- Validate Contact Us Form -->


<div id="thank-you-popup1" style="display:none;">
	<h2>Thank You!</h2>
	<!-- <a class="close" href="#">&times;</a> -->
	<p>Your request has been submitted successfully.</p>
</div>
<div id="thank-you-popup2" style="display:none;">
	<h2>Alert !</h2>
	<p>your request has not been submitted successfully.</p>
</div>
<script>
	$(document).ajaxStart(function() {
		$('.loader').show();
	});

	$(document).ajaxStop(function() {
		$('.loader').hide();
	});

	$.validator.addMethod("isEmail", function(value, element) {
		// allow any non-whitespace characters as the host part
		return this.optional(element) || /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(value);
	}, 'Please enter a valid email address.');

	$.validator.addMethod("isPhone", function(value, element) {
		// allow any non-whitespace characters as the host part
		//return this.optional(element) || /^\d{10}$/.test(value);
		return this.optional(element) || /^(\d+-?)+\d+$/.test(value);
	}, 'Please enter a valid phone.');

	$.validator.addMethod("isZipcode", function(value, element) {
		// allow any non-whitespace characters as the host part
		//return this.optional(element) || /(^\d{5}$)|(^\d{5}-\d{4}$)/.test(value);
		return this.optional(element) || /^[A-Za-z0-9? ,_-]{3,9}$/.test(value);
	}, 'Please enter a valid zipcode.');

	$(document).ready(function() {

		$('#contactus_form').validate({
			rules: {
				fname: 'required',
				lname: 'required',
				email: {
					required: true,
					isEmail: true
				},
				phone: {
					required: true,
					//number: true,
					isPhone: true
				},
				country: 'required',
				state: 'required',
				city: 'required',
				zip_code: {
					required: true,
					isZipcode: true
				},
				reach_date: 'required',
				reach_time: 'required',
			},
			messages: {
				fname: {
					required: 'First Name is required'
				},
				lname: {
					required: 'Last Name is required'
				},
				email: {
					required: "Email is required"
				},
				phone: {
					required: "Phone is required",
					number: "Enter Number only"
				},
				country: {
					required: "Country is required"
				},
				state: {
					required: 'State is required'
				},
				city: {
					required: "City is required"
				},
				zip_code: {
					required: "Zip Code is required"
				},
				reach_date: {
					required: "Date is required"
				},
				reach_time: {
					required: "Time is required"
				}
			},
			submitHandler: function(form) {

				var formData = $(form).serialize();
				$.ajax({
					url: `<?php echo base_url('contact-us-save') ?>`,
					type: 'post',
					data: formData,
					dataType: 'json',
					success: function(response) {
						if (response.status == true) {
							$('#thank-you-popup1').fadeIn();

							setTimeout(function() {
								// window.location.href = "<?= site_url(); ?>";
								window.location.reload()
							}, 3000);

						} else {
							$('#thank-you-popup2').fadeIn();
							setTimeout(function() {
								window.location.reload();
							}, 3000);
						}

					},
					error: function(response) {
						// handle error response
						$('#thank-you-popup2').fadeIn();
						setTimeout(function() {
							window.location.reload();
						}, 1000);
					}
				});

			}
		});
	});


	$('#phone_number').keyup(function() {
		var phone_number = $(this).val().replace(/[^0-9]/g, '');
		if (phone_number.length > 0) {
			phone_number = phone_number.match(new RegExp('.{1,3}', 'g')).join('-');
		}
		$(this).val(phone_number);
	});
</script>