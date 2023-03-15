$(document).ready(function(){

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
		if(!emailValidation(fieldArea.find('input[name="email"]')))
			isFormValid = false;
		if(!textVailidation(fieldArea.find('input[name="fname"]')))
			isFormValid = false;
		if(!textVailidation(fieldArea.find('input[name="lname"]')))
			isFormValid = false;	
	}
	if(step == 3){
		if(!radioVailidation(fieldArea.find('input[name="how_contact"]')))
			isFormValid = false;
	}
	if(step == 4){
		if(!textVailidation(fieldArea.find('input[name="reach_time"]')))
			isFormValid = false;
		if(!textVailidation(fieldArea.find('input[name="reach_date"]')))
			isFormValid = false;
	}
	if(step+1 == 5){
		var nstep = 5;
		var fieldArea = $('#step-'+nstep);
		fieldArea.find('#f_l_name').html($('input[name="fname"]').val()+' '+$('input[name="lname"]').val());
		fieldArea.find('#company_name').html('Anytime Security');
		fieldArea.find('#pos_in__name').html($('input[name="position_in_company"]').val());
		fieldArea.find('#email_addr').html($('input[name="email"]').val());
		fieldArea.find('#city').html($('input[name="city"]').val());
		fieldArea.find('#state').html($('input[name="state"]').val());
		fieldArea.find('#country').html($('input[name="country"]').val());
		fieldArea.find('#phone').html($('input[name="phone"]').val());
		fieldArea.find('#reach_time').html($('input[name="reach_time"]').val());
		fieldArea.find('#reach_date').html($('input[name="reach_date"]').val());

		var serviceField = $('#step-2'),
			html = '',
			i = 1;
		$.each(serviceField.find(':input'), function(){
			if($(this).attr('type') == 'checkbox' && $(this).is(':checked')){
				if(i == 1)
					html += $(this).val();
				else
					html += ', ' + $(this).val();
				i++;
			}
		});

		fieldArea.find('#services').html(html);
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

	if(nextStep == 5){
		$(".review-step").show();
		stepHeder.hide();
	}
	else{
		$(".review-step").hide();
		stepHeder.show();
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
