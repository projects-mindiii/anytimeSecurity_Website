$(document).ready(function(){
	
	$('#register-form').on('keyup keypress', function(e) {
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

	$('.bs-wizard-step').click(function(e){
		e.preventDefault();
		console.log('ok');
	})

	$('.btn-next').click(function(e){
		e.preventDefault();
		var $this = $(this),
			step = $this.data('step-no');

		gotoNextStep(step);
	});

	$('.btn-back').click(function(e){
		e.preventDefault();
		var $this = $(this),
			step = $this.data('step-no');
	
		gotoBackStep(step);
	});

	$('.btn-submit-form').click(function(e){
		e.preventDefault();
		$('#register-form').submit();
	});

	$(".link-tab").click(function(e) {
    	e.preventDefault();
    	var id = $(this).attr('href');
    	var url = $(location).attr('href'),
	    parts = url.split("/"),
	    last_part = parts[parts.length-1];
	    if(last_part == 'register.php' || last_part == 'learnmore.php'){
	    	baseUrl = '';
	    	for(var i = 0; i <= parts.length-2; i++){
	    		baseUrl += parts[i]+'/';
	    	}
	    	window.location.replace(baseUrl+id);
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

    $('body').on('keyup blur','input[name="fname"]', function(){
    	if(textVailidation($(this))){
    		var formGroup = $(this).closest('.form-group');
    		formGroup.removeClass('has-error');
			$(this).removeClass('has-error');
			formGroup.find('.error').remove();
    	}
    });
    $('body').on('keyup blur','input[name="lname"]', function(){
    	if(textVailidation($(this))){
    		var formGroup = $(this).closest('.form-group');
    		formGroup.removeClass('has-error');
			$(this).removeClass('has-error');
			formGroup.find('.error').remove();
    	}
    });
    $('body').on('change','input[type="radio"]', function(){
    	if(radioVailidation($(this))){
    		var row = $(this).closest('.checkbox-group');
    		$.each(row.find('.form-group'), function(){
    			var formGroup = $(this);
	    		formGroup.removeClass('has-error');
				formGroup.find('label').removeClass('error');
				formGroup.find('.radiomark').css('border-color','#00517c');
    		})
    	}
    });		

    $('body').on('keyup blur','input[type="email"]', function(){
    	if(emailValidation($(this))){
    		var formGroup = $(this).closest('.form-group');
    		formGroup.removeClass('has-error');
			$(this).removeClass('has-error');
			formGroup.find('.error').remove();
    	}
    });		
})

function gotoNextStep(step){
	var isFormValid = true;
	var fieldArea = $('#step-'+step);
	if(step == 1){
		alert("Step 1");
	if($('input[name="register_form"]').val()=='true'){	
		if( $('input[name="service[]"]:checked').length == 0){
			$(".alertstep1").css("display","block");
			isFormValid = false;
		}else{
			var values=[];
			$('input[name="service[]"]:checked').each(function() {
            values.push($(this).val());
            });
            if(values){
            	sessionStorage.setItem("step-1", JSON.stringify(values));
            	console.log(sessionStorage.getItem("step-1"));
            }
		}
		
	}else{
		if( $('input[name="system_type[]"]:checked').length == 0){
			$(".alertstep1").css("display","block");
			isFormValid = false;
		}else{
			var values=[];
			$('input[name="system_type[]"]:checked').each(function() {
            values.push($(this).val());
            });
            if(values){
            	sessionStorage.setItem("step-1", JSON.stringify(values));
            	console.log(sessionStorage.getItem("step-1"));
            }
		}

	}
}
	if(step == 2){
		alert("Step 2");
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
	if(step == 3){
		
}
	if(step == 4){
		
}
if(step==5){
	
}

	
	if(isFormValid){
		gotoStep(step, step+1)
	}
}
function gotoBackStep(step){
	if(step){
		gotoStep(step, step-1)
	}
}
function gotoStep(currStep, nextStep){
	var stepHeder = $('.bs-wizard');
		stepHeder.find('.step-'+currStep).removeClass('active');
		if(currStep < nextStep)
			stepHeder.find('.step-'+currStep).addClass('complete');
		else
			stepHeder.find('.step-'+currStep).removeClass('complete');

		stepHeder.find('.step-'+nextStep).removeClass('complete');
		stepHeder.find('.step-'+nextStep).addClass('active');

	$('.step-text-'+currStep).hide();
	$('.step-text-'+nextStep).show();

	$('#step-'+currStep).hide();
	$('#step-'+nextStep).show();

	if(nextStep == 6){
		$(".review-step").show();
		$(".step-text-6").css("display","block");
		// stepHeder.hide();
		// $(".step-header-area").hide();
	}
	else{
		// $(".review-step").hide();
		$(".review-step").show();
		stepHeder.show();
	}
	if(nextStep == 7){
		if($('input[name="register_form"]').val()=='true'){	
		$(".review-step").show();
		$(".step-text-7").css("display","block");
		// stepHeder.hide();
		// $(".step-header-area").hide();
	}
}
	window.scrollTo(0,0);
}
function emailValidation(field){
	var formGroup = field.closest('.form-group');
	var emailVal = field.val();
	if(formGroup.find('.error').length > 0)
		formGroup.find('.error').remove();

	if($.trim(emailVal).length != 0){
		var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if (filter.test(emailVal)){
			return true;
		}
		else{ 
			formGroup.addClass('has-error');
			field.addClass('has-error');
			formGroup.append('<p class="error">Invalid Email (like-example@email.com).</p>');
			return false;
		}
	}
	else{
		formGroup.addClass('has-error');
		field.addClass('has-error');
		formGroup.append('<p class="error">This field is required.</p>');
		return false;
	}
}

function textVailidation(field){
	var formGroup = field.closest('.form-group');
	var emailVal = field.val();
	if(formGroup.find('.error').length > 0)
		formGroup.find('.error').remove();
	
	if($.trim(emailVal).length != 0){
		return true;
	}
	else{
		formGroup.addClass('has-error');
		field.addClass('has-error');
		formGroup.append('<p class="error">This field is required.</p>');
		return false;
	}
}
function radioVailidation(field){
	var isChecked = false;
	$.each(field, function(){
		var checkbox = $(this);
		if(checkbox.prop('checked') == true)
			isChecked = true;
	})
	var formGroup = field.closest('.form-group');
	var fieldVal = field.val();
	/*if(formGroup.find('.error').length > 0)
		formGroup.find('.error').remove();*/
	
	if(isChecked && fieldVal !== ''){
		return true;
	}
	else{
		formGroup.addClass('has-error');
		field.closest('label').addClass('error');
		formGroup.find('.radiomark').css('border-color','#dd1515');
		return false;
	}
}

function setFieldNatural(field){
	var formGroup = field.closest('.form-group');
	formGroup.removeClass('has-error');
	field.removeClass('has-error');
	formGroup.find('.error').remove();
}
