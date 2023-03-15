$(document).ready(function () {
	$('#register-form').on('keyup keypress', function (e) {
		var keyCode = e.keyCode || e.which;
		if (keyCode === 13) {
			e.preventDefault();
			return false;
		}
	});

	$('.timepicker').timepicker();
	$('.datepicker').datepicker({
		autoclose: true,
		/*format: 'MM, d - yyyy'*/
		format: 'D, d-M-yyyy'
	});

	$('.bs-wizard-step').click(function (e) {
		e.preventDefault();
		console.log('ok');
	})

	$('.btn-next').click(function (e) {
		e.preventDefault();
		var $this = $(this),
			step = $this.data('step-no');

		gotoNextStep(step);
	});

	$('.btn-back').click(function (e) {
		e.preventDefault();
		var $this = $(this),
			step = $this.data('step-no');

		gotoBackStep(step);
	});

	$('.btn-submit-form').click(function (e) {
		e.preventDefault();
		$('#register-form').submit();
	});

	$(".link-tab").click(function (e) {
		e.preventDefault();
		var id = $(this).attr('href');
		var url = $(location).attr('href'),
			parts = url.split("/"),
			last_part = parts[parts.length - 1];
		if (last_part == 'register.php' || last_part == 'learnmore.php') {
			baseUrl = '';
			for (var i = 0; i <= parts.length - 2; i++) {
				baseUrl += parts[i] + '/';
			}
			window.location.replace(baseUrl + id);
		}
	});

	/** Set field nutral **/
	/*$('body').on('keyup','input[type="text"]', function(){
    	if(textVailidation($(this))){
    		var formGroup = $(this).closest('.form-group');
    		formGroup.removeClass('has-error');
			$(this).removeClass('has-error');
			formGroup.find('.error').remove();
    	}
    });*/

	$('body').on('keyup blur', 'input[name="fname"]', function () {
		if (textVailidation($(this))) {
			var formGroup = $(this).closest('.form-group');
			formGroup.removeClass('has-error');
			$(this).removeClass('has-error');
			formGroup.find('.error').remove();
		}
	});

	$('body').on('keyup blur', 'input[name="lname"]', function () {
		if (textVailidation($(this))) {
			var formGroup = $(this).closest('.form-group');
			formGroup.removeClass('has-error');
			$(this).removeClass('has-error');
			formGroup.find('.error').remove();
		}
	});

	$('body').on('change', 'input[type="radio"]', function () {
		if (radioVailidation($(this))) {
			var row = $(this).closest('.checkbox-group');
			$.each(row.find('.form-group'), function () {
				var formGroup = $(this);
				formGroup.removeClass('has-error');
				formGroup.find('label').removeClass('error');
				formGroup.find('.radiomark').css('border-color', '#00517c');
			})
		}
	});

	$('body').on('keyup blur', 'input[type="email"]', function () {
		if (emailValidation($(this))) {
			var formGroup = $(this).closest('.form-group');
			formGroup.removeClass('has-error');
			$(this).removeClass('has-error');
			formGroup.find('.error').remove();
		}
	});

	$('body').on('keyup blur', 'input[name="city"]', function () {
		if (textVailidation($(this))) {
			var formGroup = $(this).closest('.form-group');
			formGroup.removeClass('has-error');
			$(this).removeClass('has-error');
			formGroup.find('.error').remove();
		}
	});

	$('body').on('keyup blur', 'input[name="country"]', function () {
		if (textVailidation($(this))) {
			var formGroup = $(this).closest('.form-group');
			formGroup.removeClass('has-error');
			$(this).removeClass('has-error');
			formGroup.find('.error').remove();
		}
	});

	$('body').on('blur', 'input[name="zip_code"]', function () {
		var formGroup = $(this).closest('.form-group');
		formGroup.removeClass('has-error');
		$(this).removeClass('has-error');
		formGroup.find('.error').remove();
		if (!isZipCode($(this))) {
			formGroup.addClass('has-error');
			$(this).addClass('has-error');
			formGroup.append('<p class="error">Invalid zip code</p>');
		}
	});

	$('body').on('change', 'select[name="state"]', function () {
		var formGroup = $(this).closest('.form-group');
		if ($('#states option:selected')) {
			let state_name = $("#states option:selected").text();
			$('#state_name').val(state_name);
			let state = $('#states').find(":selected").val();
			//alert(state);
			if(!state) {
				formGroup.addClass('has-error');
				formGroup.append('<p class="error">This field is required.</p>');
				return false;
			}
			else {
				var formGroup = $(this).closest('.form-group');
				formGroup.removeClass('has-error');
				$(this).removeClass('has-error');
				formGroup.find('.error').remove();
			}
		}
	});

	$('body').on('change', 'select[name="country"]', function () {
		var formGroup = $(this).closest('.form-group');
		if ($('#country option:selected')) {
			let country_name = $("#country option:selected").text();
			$('#country_name').val(country_name);
			let state = $('#country').find(":selected").val();
			//alert(state);
			if(!state) {
				formGroup.addClass('has-error');
				formGroup.append('<p class="error">This field is required.</p>');
				return false;
			}
			else {
				var formGroup = $(this).closest('.form-group');
				formGroup.removeClass('has-error');
				$(this).removeClass('has-error');
				formGroup.find('.error').remove();
			}
		}
	});

	$('body').on('change', 'select[name="city"]', function () {
		var formGroup = $(this).closest('.form-group');
		if ($('#city option:selected')) {
			let city_name = $("#city option:selected").text();
			$('#city_name').val(city_name);

			let state = $('#city').find(":selected").val();
			//alert(state);
			if(!state) {
				formGroup.addClass('has-error');
				formGroup.append('<p class="error">This field is required.</p>');
				return false;
			}
			else {
				var formGroup = $(this).closest('.form-group');
				formGroup.removeClass('has-error');
				$(this).removeClass('has-error');
				formGroup.find('.error').remove();
			}
		}
	});


	// $('body').on('change', 'select[name="state"]', function () {
	// 	var formGroup = $(this).closest('.form-group');
	// 	if ($('#states option:selected')) {
	// 		let state_name = $("#states option:selected").text();
	// 		$('#state_name').val(state_name);
	// 		let state = $('#states').find(":selected").val();
	// 		//alert(state);
	// 		if(!state) {
	// 			formGroup.addClass('has-error');
	// 			formGroup.append('<p class="error">This field is required.</p>');
	// 			return false;
	// 		}
	// 		else {
	// 			var formGroup = $(this).closest('.form-group');
	// 			formGroup.removeClass('has-error');
	// 			$(this).removeClass('has-error');
	// 			formGroup.find('.error').remove();
	// 		}
	// 	}
	// });

	// $('body').on('change', 'select[name="state"]', function () {
	// 	if ($('#states option:selected')) {
	// 		var formGroup = $(this).closest('.form-group');
	// 		formGroup.removeClass('has-error');
	// 		$(this).removeClass('has-error');
	// 		formGroup.find('.error').remove();
	// 	}
	// });
	$('body').on('change', 'select[name="homeowner"]', function () {
		var formGroup = $(this).closest('.form-group');
		if ($('#homeowner option:selected')) {
			let homeowner = $('#homeowner').find(":selected").val();
			if(!homeowner) {
				formGroup.addClass('has-error');
				formGroup.append('<p class="error">This field is required.</p>');
				return false;
			}
			else {
				var formGroup = $(this).closest('.form-group');
				formGroup.removeClass('has-error');
				$(this).removeClass('has-error');
				formGroup.find('.error').remove();
			}
		}
	});

	// $('body').on('change', 'select[name="homeowner"]', function () {
	// 	if ($('#homeowner option:selected')) {
	// 		var formGroup = $(this).closest('.form-group');
	// 		formGroup.removeClass('has-error');
	// 		$(this).removeClass('has-error');
	// 		formGroup.find('.error').remove();
	// 	}
	// });

	// $('body').on('blur', 'input[name="phone"]', function () {
	// 	var field = $(this);
	// 	var formGroup = $(this).closest('.form-group');
	// 	formGroup.removeClass('has-error');
	// 	$(this).removeClass('has-error');
	// 	formGroup.find('.error').remove();
	// 	console.log(phoneNumber(field))
	// 	if(!phoneNumber(field)){
	// 		formGroup.addClass('has-error');
	// 		$(this).addClass('has-error');
	// 		formGroup.append('<p class="error">Invalid phone number</p>');
	// 	}
	// });

	$('body').on('blur', 'input[name="phone"]', function () {
		var field = $(this).val();
		var formGroup = $(this).closest('.form-group');
		formGroup.removeClass('has-error');
		$(this).removeClass('has-error');
		formGroup.find('.error').remove();
		console.log(phoneNumber(field))
		if(!phoneNumber(field)){
			formGroup.addClass('has-error');
			$(this).addClass('has-error');
			formGroup.append('<p class="error">Invalid phone number</p>');
		}
	});
})
// if (!textVailidation(fieldArea.find('select[name="homeowner"]'))) {
// 	isFormValid = false;
// } else {
// 	sessionStorage.setItem("homeowner", $('#homeowner option:selected').text());
// 	console.log(sessionStorage.getItem("homeowner"));
// 	let customer_owner = sessionStorage.getItem("homeowner");
// 	$("span#customer_owner").html('').html(customer_owner);
// }
function gotoNextStep(step) {
	var isFormValid = true;
	var fieldArea = $('#step-' + step);
	if (step == 1) {
		if ($('input[name="register_form"]').val() == 'true') {
			if ($('input[name="service[]"]:checked').length == 0) {
				$(".alertstep1").css("display", "block");
				isFormValid = false;
			} else {
				var values = [];
				$('input[name="service[]"]:checked').each(function () {
					values.push($(this).val());
				});
				if (values) {
					sessionStorage.setItem("step-1", JSON.stringify(values));
					console.log(sessionStorage.getItem("step-1"));
				}
			}

		} else {
			if ($('input[name="system_type[]"]:checked').length == 0) {
				$(".alertstep1").css("display", "block");
				isFormValid = false;
			} else {
				var values = [];
				$('input[name="system_type[]"]:checked').each(function () {
					values.push($(this).val());
				});
				if (values) {
					sessionStorage.setItem("step-1", JSON.stringify(values));
					console.log(sessionStorage.getItem("step-1"));
				}
			}

		}
	}
	if (step == 2) {
		if ($('input[name="register_form"]').val() == 'true') {
			if ($('input[name="system_type[]"]:checked').length == 0) {
				$(".alertstep1").css("display", "block");
				$(".step-text-1").css("display", "none");
				$(".step-text-2").css("display", "block");
				isFormValid = false;
			} else {
				var values = [];
				$('input[name="system_type[]"]:checked').each(function () {
					values.push($(this).val());
				});
				if (values) {

					sessionStorage.setItem("step-2", JSON.stringify(values));
					console.log(sessionStorage.getItem("step-2"));
				}
			}

		} else {
			var email, cemail;
			email = fieldArea.find('input[name="email"]').val();
			cemail = fieldArea.find('input[name="confirm_email"]').val();
			var field = $('input[name="confirm_email"]');
			var formGroup = field.closest('.form-group');
			if (!emailValidation(fieldArea.find('input[name="email"]')))
				isFormValid = false;
			if (!emailValidation(fieldArea.find('input[name="confirm_email"]')))
				isFormValid = false;
			if (email != cemail) {
				formGroup.addClass('has-error');
				field.addClass('has-error');
				formGroup.append('<p class="error">Confirm email not matched</p>');
				isFormValid = false;
			} else {
				sessionStorage.setItem("email", email);
				console.log(sessionStorage.getItem("email"));
			}
			/*	sessionStorage.setItem('email':fieldArea.find('input[name="email"]').val());*/
			if (!textVailidation(fieldArea.find('input[name="fname"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("fname", $('input[name="fname"]').val());
				console.log(sessionStorage.getItem("fname"));

			}
			if (!textVailidation(fieldArea.find('input[name="lname"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("lname", $('input[name="lname"]').val());
				console.log(sessionStorage.getItem("lname"));


			}
			// if (!textVailidation(fieldArea.find('input[name="city"]'))) {
			// 	isFormValid = false;
			// } else {
			// 	sessionStorage.setItem("city", $('input[name="city"]').val());
			// 	console.log(sessionStorage.getItem("city"));

			// }
			// if (!textVailidation(fieldArea.find('select[name="state"]'))) {
			// 	isFormValid = false;
			// } else {
			// 	sessionStorage.setItem("state", $('#states option:selected').text());
			// 	console.log(sessionStorage.getItem("state"));
			// 	let customer_state = sessionStorage.getItem("state");
			// 	$("span#customer_state").html('').html(customer_state);
			// }
			// if (!textVailidation(fieldArea.find('input[name="country"]'))) {
			// 	isFormValid = false;
			// } else {
			// 	sessionStorage.setItem("country", $('input[name="country"]').val());
			// 	console.log(sessionStorage.getItem("country"));

			// }

			if (!textVailidation(fieldArea.find('select[name="city"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("city", $('#city option:selected').text());
				console.log(sessionStorage.getItem("city"));
			}

			if (!textVailidation(fieldArea.find('select[name="state"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("state", $('#states option:selected').text());
				console.log(sessionStorage.getItem("state"));
				let customer_state = sessionStorage.getItem("state");
				$("span#customer_state").html('').html(customer_state);
			}
			// if (!textVailidation(fieldArea.find('input[name="country"]'))) {
			// 	isFormValid = false;
			// } else {
			// 	sessionStorage.setItem("country", $('input[name="country"]').val());
			// 	console.log(sessionStorage.getItem("country"));
			// }

			if (!textVailidation(fieldArea.find('select[name="country"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("country", $('#country option:selected').text());
				console.log(sessionStorage.getItem("country"));
			}


			if (!textVailidation(fieldArea.find('input[name="phone"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("phone", $('input[name="phone"]').val());
				console.log(sessionStorage.getItem("phone"));

			}

			if (!textVailidation(fieldArea.find('input[name="zip_code"]'))) {
				isFormValid = false;
			} if (!isZipCode(fieldArea.find('input[name="zip_code"]'))) {
				console.log("Tester");
				isFormValid = false;
			}
			 else {
				sessionStorage.setItem("zip_code", $('input[name="zip_code"]').val());
				console.log(sessionStorage.getItem("zip_code"));
			}
			if (!textVailidation(fieldArea.find('select[name="homeowner"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("homeowner", $('#homeowner option:selected').text());
				console.log(sessionStorage.getItem("homeowner"));
			}
			// if (!textVailidation(fieldArea.find('input[name="company_position"]'))) {
			// 	isFormValid = false;
			// } else {
			// 	sessionStorage.setItem("company_position", $('input[name="company_position"]').val());
			// 	console.log('company_position', sessionStorage.getItem("company_position"));
			// }
		}
	}
	if (step == 3) {
		let customer_state = sessionStorage.getItem("state");
		$("span#customer_state").html('').html(customer_state);
		if ($('input[name="register_form"]').val() == 'true') {
			var email, cemail;
			email = fieldArea.find('input[name="email"]').val();
			cemail = fieldArea.find('input[name="confirm_email"]').val();
			if (!emailValidation(fieldArea.find('input[name="email"]')))
				isFormValid = false;
			if (!emailValidation(fieldArea.find('input[name="confirm_email"]')))
				isFormValid = false;
			if (email != cemail) {
				$(".alertemail").css("display", "block");
				isFormValid = false;
			} else {
				$(".alertemail").css("display", "none");
				sessionStorage.setItem("email", email);
				console.log(sessionStorage.getItem("email"));
			}
			/*	sessionStorage.setItem('email':fieldArea.find('input[name="email"]').val());*/
			if (!textVailidation(fieldArea.find('input[name="fname"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("fname", $('input[name="fname"]').val());
				console.log(sessionStorage.getItem("fname"));
			}
			if (!textVailidation(fieldArea.find('input[name="lname"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("lname", $('input[name="lname"]').val());
				console.log(sessionStorage.getItem("lname"));
			}
			if (!textVailidation(fieldArea.find('input[name="company_name"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("company_name", $('input[name="company_name"]').val());
				console.log(sessionStorage.getItem("company_name"));
			}
			// if (!textVailidation(fieldArea.find('input[name="city"]'))) {
			// 	isFormValid = false;
			// } else {
			// 	sessionStorage.setItem("city", $('input[name="city"]').val());
			// 	console.log(sessionStorage.getItem("city"));
			// }
			// if (!textVailidation(fieldArea.find('select[name="state"]'))) {
			// 	isFormValid = false;
			// } else {
			// 	sessionStorage.setItem("state", $('#states option:selected').text());
			// 	console.log(sessionStorage.getItem("state"));
			// 	let customer_state = sessionStorage.getItem("state");
			// 	$("span#customer_state").html('').html(customer_state);
			// }
			// if (!textVailidation(fieldArea.find('input[name="country"]'))) {
			// 	isFormValid = false;
			// } else {
			// 	sessionStorage.setItem("country", $('input[name="country"]').val());
			// 	console.log(sessionStorage.getItem("country"));
			// }

			if (!textVailidation(fieldArea.find('select[name="city"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("city", $('#city option:selected').text());
				console.log(sessionStorage.getItem("city"));
			}

			if (!textVailidation(fieldArea.find('select[name="state"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("state", $('#states option:selected').text());
				console.log(sessionStorage.getItem("state"));
				let customer_state = sessionStorage.getItem("state");
				$("span#customer_state").html('').html(customer_state);
			}
			// if (!textVailidation(fieldArea.find('input[name="country"]'))) {
			// 	isFormValid = false;
			// } else {
			// 	sessionStorage.setItem("country", $('input[name="country"]').val());
			// 	console.log(sessionStorage.getItem("country"));
			// }

			if (!textVailidation(fieldArea.find('select[name="country"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("country", $('#country option:selected').text());
				console.log(sessionStorage.getItem("country"));
			}

			if (!textVailidation(fieldArea.find('input[name="phone"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("phone", $('input[name="phone"]').val());
				console.log(sessionStorage.getItem("phone"));
			}
			if (!textVailidation(fieldArea.find('input[name="zip_code"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("zip_code", $('input[name="zip_code"]').val());
				console.log(sessionStorage.getItem("zip_code"));
			}
			//  sessionStorage.setItem("company_position", $('input[name="company_position"]').val());
			// if(!textVailidation(fieldArea.find('input[name="company_position"]'))){
			// 			isFormValid = false;
			// }
			// else{
			// 	sessionStorage.setItem("company_position", $('input[name="company_position"]').val());
			// 	console.log(sessionStorage.getItem("company_position"));
			// }
			if (!textVailidation(fieldArea.find('input[name="years_in_business"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("years_in_business", $('input[name="years_in_business"]').val());
				console.log(sessionStorage.getItem("years_in_business"));
			}
			if (!textVailidation(fieldArea.find('input[name="buss_mailing_addr"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("buss_mailing_addr", $('input[name="buss_mailing_addr"]').val());
				console.log(sessionStorage.getItem("buss_mailing_addr"));
			}

		} else {
			if ($('input[name="best_way[]"]:checked').length == 0) {
				$(".alert-step-3").css("display", "block");
				$(".step-text-3").css("display", "block");
				isFormValid = false;
			} else {
				var values = [];
				$('input[name="best_way[]"]:checked').each(function () {
					values.push($(this).val());
				});
				if (values) {
					sessionStorage.setItem("step-3", JSON.stringify(values));
					console.log(sessionStorage.getItem("step-3"));
				}
			}
		}
	}
	if (step == 4) {
		if ($('input[name="register_form"]').val() == 'true') {
			if ($('input[name="best_way[]"]:checked').length == 0) {
				$(".alert-step-4").css("display", "block");
				$(".step-text-4").css("display", "block");
				isFormValid = false;
			} else {
				var values = [];
				$('input[name="best_way[]"]:checked').each(function () {
					values.push($(this).val());
				});
				if (values) {
					sessionStorage.setItem("step-4", JSON.stringify(values));
					console.log(sessionStorage.getItem("step-4"));
				}
			}
		} else {
			if (!textVailidation(fieldArea.find('input[name="reach_time"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("reach_time", $('input[name="reach_time"]').val());
				console.log(sessionStorage.getItem("reach_time"));
			}
			if (!textVailidation(fieldArea.find('input[name="reach_date"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("reach_date", $('input[name="reach_date"]').val());
				console.log(sessionStorage.getItem("reach_date"));
			}

			//set feilds
			$("input[name='final_fname']").val(sessionStorage.getItem("fname"));
			$("input[name='final_lname']").val(sessionStorage.getItem("lname"));
			$("input[name='final_email']").val(sessionStorage.getItem("email"));
			$("input[name='final_city']").val(sessionStorage.getItem("city"));
			$("input[name='final_country']").val(sessionStorage.getItem("country"));
			$("input[name='final_phone']").val(sessionStorage.getItem("phone"));
			$("input[name='final_zip_code']").val(sessionStorage.getItem("zip_code"));
			//$("input[name='company_position']").val(sessionStorage.getItem("company_position"));
			$("#final_state_id option:selected").val(sessionStorage.getItem("state"));
		}
	}
	if (step == 5) {
		let customer_homeowner = sessionStorage.getItem("homeowner");
		$("span#customer_homeowner").html('').html(customer_homeowner);

		let customer_fname = sessionStorage.getItem("fname");
		$("span#customer_firstname").html('').html(customer_fname);

		let customer_lname = sessionStorage.getItem("lname");
		$("span#customer_lastname").html('').html(customer_lname);

		let customer_email = sessionStorage.getItem("email");
		$("span#customer_email").html('').html(customer_email);

		let customer_phone = sessionStorage.getItem("phone");
		$("span#customer_phone").html('').html(customer_phone);

		let customer_country = sessionStorage.getItem("country");
		$("span#customer_country").html('').html(customer_country);

		let customer_city = sessionStorage.getItem("city");
		$("span#customer_city").html('').html(customer_city);

		let customer_zipcode = sessionStorage.getItem("zip_code");
		$("span#customer_zipcode").html('').html(customer_zipcode);

		let customer_time = sessionStorage.getItem("reach_time");
		$("span#customer_time").html('').html(customer_time);

		let customer_date = sessionStorage.getItem("reach_date");
		$("span#customer_date").html('').html(customer_date);

		let customer_system_type = sessionStorage.getItem("step-1");
		let system_type = JSON.parse(customer_system_type);

		var res = [];
		for (var i in system_type)
		res.push(system_type[i]);
		$("span#customer_system_type").html('').html(" " + res);

		let customer_best_way = sessionStorage.getItem("step-3");
		let best_type = JSON.parse(customer_best_way);
		var resb = [];
		for (var i in best_type)
		resb.push(best_type[i]);
		$("span#customer_best_way").html('').html(" " + resb);

		if ($('input[name="register_form"]').val() == 'true') {
			if (!textVailidation(fieldArea.find('input[name="reach_time"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("reach_time", $('input[name="reach_time"]').val());
				console.log(sessionStorage.getItem("reach_time"));
			}
			if (!textVailidation(fieldArea.find('input[name="reach_date"]'))) {
				isFormValid = false;
			} else {
				sessionStorage.setItem("reach_date", $('input[name="reach_date"]').val());
				console.log(sessionStorage.getItem("reach_date"));
			}

			//set feilds
			$("input[name='final_fname']").val(sessionStorage.getItem("fname"));
			$("input[name='final_lname']").val(sessionStorage.getItem("lname"));
			$("input[name='final_email']").val(sessionStorage.getItem("email"));
			$("input[name='final_city']").val(sessionStorage.getItem("city"));
			$("input[name='final_country']").val(sessionStorage.getItem("country"));
			$("input[name='final_phone']").val(sessionStorage.getItem("phone"));
			$("input[name='final_zip_code']").val(sessionStorage.getItem("zip_code"));
			//$("input[name='company_position']").val(sessionStorage.getItem("company_position"));
			$("input[name='final_buss_mailing_addr']").val(sessionStorage.getItem("buss_mailing_addr"));
			$("input[name='final_years_in_business']").val(sessionStorage.getItem("years_in_business"));
			$("input[name='final_company_name']").val(sessionStorage.getItem("company_name"));
			$(".step-text-5").css("display", "block");
			//alert(sessionStorage.getItem("fname"));
			//console.log("++++++++++++++++++=",sessionStorage.getItem("email"));
		}
	}
	if(step == 7) {
		if ($('input[name="register_form"]').val() == 'true') {
			
			
		} else {
			if ($('input[name="check_approve"]:checked').length == 0) {
				$(".alert-step-7").css("display", "block");
				//$(".step-text-2").css("display", "block");
				isFormValid = false;
			} else {
				
			}
		}
	}	
	if (isFormValid) {
		gotoStep(step, step + 1)
	}
}

function gotoBackStep(step) {
	if (step) {
		gotoStep(step, step - 1)
	}
}

function gotoStep(currStep, nextStep) {
	var stepHeder = $('.bs-wizard');
	stepHeder.find('.step-' + currStep).removeClass('active');
	if (currStep < nextStep)
		stepHeder.find('.step-' + currStep).addClass('complete');
	else
		stepHeder.find('.step-' + currStep).removeClass('complete');

	stepHeder.find('.step-' + nextStep).removeClass('complete');
	stepHeder.find('.step-' + nextStep).addClass('active');

	$('.step-text-' + currStep).hide();
	$('.step-text-' + nextStep).show();

	$('#step-' + currStep).hide();
	$('#step-' + nextStep).show();

	if (nextStep == 6) {
		$(".review-step").show();
		$(".step-text-6").css("display", "block");
		// stepHeder.hide();
		// $(".step-header-area").hide();
	} else {
		// $(".review-step").hide();
		$(".review-step").show();
		stepHeder.show();
	}
	if (nextStep == 7) {
		if ($('input[name="register_form"]').val() == 'true') {
			$(".review-step").show();
			$(".step-text-7").css("display", "block");
			// stepHeder.hide();
			// $(".step-header-area").hide();
		}
	}
	window.scrollTo(0, 0);
}

function emailValidation(field) {
	var formGroup = field.closest('.form-group');
	var emailVal = field.val();
	if (formGroup.find('.error').length > 0)
		formGroup.find('.error').remove();

	if ($.trim(emailVal).length != 0) {
		var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if (filter.test(emailVal)) {
			return true;
		} else {
			formGroup.addClass('has-error');
			field.addClass('has-error');
			formGroup.append('<p class="error">Invalid Email (like-example@email.com).</p>');
			return false;
		}
	} else {
		formGroup.addClass('has-error');
		field.addClass('has-error');
		formGroup.append('<p class="error">This field is required.</p>');
		return false;
	}
}

function textVailidation(field) {
	var formGroup = field.closest('.form-group');
	var emailVal = field.val();
	if (formGroup.find('.error').length > 0)
		formGroup.find('.error').remove();

	if ($.trim(emailVal).length != 0) {
		return true;
	} else {
		formGroup.addClass('has-error');
		field.addClass('has-error');
		formGroup.append('<p class="error">This field is required.</p>');
		return false;
	}
}

function radioVailidation(field) {
	var isChecked = false;
	$.each(field, function () {
		var checkbox = $(this);
		if (checkbox.prop('checked') == true)
			isChecked = true;
	})
	var formGroup = field.closest('.form-group');
	var fieldVal = field.val();
	/*if(formGroup.find('.error').length > 0)
		formGroup.find('.error').remove();*/

	if (isChecked && fieldVal !== '') {
		return true;
	} else {
		formGroup.addClass('has-error');
		field.closest('label').addClass('error');
		formGroup.find('.radiomark').css('border-color', '#dd1515');
		return false;
	}
}

function isZipCode(field){
	var fieldVal = field.val();
	var isValidZip = /(^\d{6}$)|(^\d{6}-\d{4}$)/.test(fieldVal);
	return isValidZip;
}

function phoneNumber(inputtxt) {
  	var phoneno = /^\d{10}$/;
  	if(inputtxt.match(phoneno)){
      return true;
    }else{
        return false;
    }
}

function setFieldNatural(field) {
	var formGroup = field.closest('.form-group');
	formGroup.removeClass('has-error');
	field.removeClass('has-error');
	formGroup.find('.error').remove();
}

// ************** SELECT STATES AJAX ****************
$('body').on('change' , '#country', function() {
	let country = $(this).val();
	//alert(country);
	if(country != '') {
		$.ajax({
			url:site_url+'get-states/'+country,
			dataType:'JSON',
			type:'GET',
			success:function(res) {
			 console.log(res.countries);
			 let options = '<option value="">Select State*</option>';
			 $.each(res.countries, function(k,v) {
				//console.log(v.name);
				options += '<option value="'+v.id+'">'+v.name+'</option>';
			 })
			 $('#states').html('').html(options);
			 $('#city').html('<option value="">Select City*</option>');
			}
		  });
	} else {
		$('#states').html('').html('<option value="">Select State*</option>');
		$('#city').html('').html('<option value="">Select City*</option>');
	}
}) 	

// ************** SELECT CITIES AJAX ****************
$('body').on('change' , '#states', function() {
	let country = $('#country').val();
	let state = $(this).val();
	//alert(country);
	if(country != '' && state !='') {
		$.ajax({
			url:site_url+'get-cities/'+country+'/'+state,
			dataType:'JSON',
			type:'GET',
			success:function(res) {
			 console.log(res.cities);
			 let options = '<option value="">Select City*</option>';
			 $.each(res.cities, function(k,v) {
				//console.log(v.name);
				options += '<option value="'+v.id+'">'+v.name+'</option>';
			 })
			 $('#city').html('').html(options);
			}
		  });
	} else {
		$('#city').html('').html('<option value="">Select City*</option>');
	}
}) 	
