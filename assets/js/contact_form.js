$(document).ready(function () {

	$('.timepicker').timepicker();
	$('.datepicker').datepicker({
		autoclose: true,
		/*format: 'MM, d - yyyy'*/
		format: 'D, d-M-yyyy'
	});

});


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