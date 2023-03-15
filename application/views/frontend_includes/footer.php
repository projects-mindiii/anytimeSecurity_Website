<footer class="row" id="footer">
	<div class="col-md-12">
		<div class="col-md-6">
			<p class="logo-area">
				<a href="<?php echo base_url()?>">
					<img src="<?php echo base_url()?>assets/images/Logo-bottom.png" alt="anytimesecurity.com" class="logo-img">
					<span class="footer-logo-text">AnytimeSecurity.com<br><small class="pull-right">"your security is our business"</small></span>
				</a>
			</p>
		</div>
		<div class="col-md-6">
			<nav class="footer-nav-area hidden-xs">
				<ul id="footer-navbar-custom-style">
					<li><a href="<?php echo base_url('')?>#aboutus">About</a></li>
					<li><a href="<?php echo base_url('privacy-policy')?>">Privacy</a></li>
		        	<li><a href="<?php echo base_url('learn-more')?>" >Get Quote</a></li>
					<li><a href="<?php echo base_url('')?>#solution-provider">Solution Providers</a></li>
					<li><a href="<?php echo base_url('contact-us')?>" >Contact</a></li>
				</ul>
			</nav>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="col-md-12" align="center">
		<h4>Connect with us</h4>
		<button class="btn btn-o social-btn btn-white m-t-20">
		<i class="fa fa-facebook"></i></a>
</button>
		<button class="btn btn-o social-btn btn-white m-t-20">
		<i class="fa fa-twitter"></i></a>
		</button>
		<button class="btn btn-o social-btn btn-white m-t-20">
		<i class="fa fa-google-plus"></i>
		</button>

		<p class="m-t-50">Copyright 2018. AnytimeSecurity.com, All right reserved </p>
	</div>
</footer>
	<script type="text/javascript">
		/*$(".link-tab").click(function(e) {
	    	e.preventDefault();
	    	var id = $(this).attr('href');
			$("body, html").animate({ 
			    scrollTop: $(id).offset().top 
			}, 600);
		});*/
	</script> 
	<script>
// 	 $('form#register-form').on('submit', function(e) {
// 	e.preventDefault();
// 	let customer_fname = sessionStorage.getItem("fname");
// 	let customer_lname = sessionStorage.getItem("lname");
// 	let customer_email = sessionStorage.getItem("email");
// 	let customer_phone = sessionStorage.getItem("phone");
// 	let customer_country = sessionStorage.getItem("country");
// 	let customer_city = sessionStorage.getItem("city");
// 	let customer_zipcode = sessionStorage.getItem("zip_code");
// 	let customer_time = sessionStorage.getItem("reach_time");
// 	let customer_date = sessionStorage.getItem("reach_date");

// 	let customer_system_type = sessionStorage.getItem("step-1");
// 	let system_type = JSON.parse(customer_system_type);
// 	var res = [];
// 	for(var i in system_type)
// 	res.push(system_type[i]);
// 	//+++++++++++++ ++++++++++++++++++++/
// 	let customer_best_way = sessionStorage.getItem("step-3");
// 	let best_type = JSON.parse(customer_best_way);
// 	var resb = [];
// 	for(var i in best_type)
// 	resb.push(best_type[i]);

// 	let jsonData = {
// 		"customer_fname" : customer_fname,
// 		"customer_lname" : customer_lname,
// 		"customer_email" : customer_email,
// 		"customer_phone" : customer_phone,
// 		"customer_country" : customer_country,
// 		"customer_city" : customer_city,
// 		"customer_zipcode" : customer_zipcode,
// 		"customer_time" : customer_time,
// 		"customer_date" : customer_date,
// 	};

// 	$.ajax({
// 		url:site_url+'send-business-email',
// 		data:jsonData,
// 		dataType:'JSON',
// 		type:'POST',
// 		success:function(res) {

// 		}
// 	});
// })
</script>
</body>
</html>