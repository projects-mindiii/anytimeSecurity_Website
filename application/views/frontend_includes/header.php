<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="description" content="Anytime Security">
  	<meta name="keyword" content="security">

  	<link rel="shortcut icon" href="<?php echo base_url('img/favicon.png')?>" type="image/x-icon" /> 
  	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  	<link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css" />

	<!-- jquery cdn -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	
	
    <link href="<?php echo base_url('assets/css/multi-form.css')?>" rel="stylesheet" type="text/css">

	<!-- Java script -->
	<script src="<?php //echo base_url('assets/plugins/jquery-3.3.1.js')?>" type="text/javascript"></script>

	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>


	<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/plugins/moment-with-loctz.min.js')?>" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
	<title><?php echo $pageTitle?></title>
</head>
<body>
	<header class="row custom-header">
	<!-- <div class="col-md-6">
		<p class="logo-area">
			<a href="index.php">
				<img src="assets/images/logo-top.png" alt="anytimesecurity.com" class="logo-img">
				<span class="logo-text">Anytime Security<br>"your security is our business"</span>
			</a>
		</p>
	</div>
	<div class="col-md-6">
		<nav class="nav-area">
			<ul id="navbar-custom-style">
				<li><a href="#aboutus" class="jump-link"></a>About</li>
				<li><a href="#privacy" class="jump-link"></a>Privacy</li>
				<li><a href="learnmore.php" class="jump-link"></a>Get Quote</li>
				<li><a href="#solution-provider" class="jump-link"></a>Solution Providers</li>
				<li><a href="#contactus" class="jump-link"></a>Contact</li>
			</ul>
		</nav>
	</div> -->
	<nav class="navbar navbar-inverse custom-nav-bar">
		<div class="container-fluid">
		    <div class="navbar-header">
		      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		      	</button>
		      	<a class="navbar-brand" href="<?php echo base_url()?>">
		      		<img src="<?php echo base_url('assets/images/logo-top.png')?>" alt="anytimesecurity.com" class="logo-img">
					<span class="logo-text">Anytime Security</span>

	      	
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      	<ul class="nav navbar-nav navbar-custom-style">
		        	<li><a href="<?php echo base_url('')?>#aboutus">About</a></li>
		        	<li><a href="<?php echo base_url('privacy-policy')?>">Privacy</a></li>
		        	<li><a href="<?php echo base_url('learn-more')?>" >Get Quote</a></li>
		        	<li><a href="<?php echo base_url('')?>#solution-provider">Solution Providers</a></li>
		        	<li><a href="<?php echo base_url('contact-us')?>" >Contact</a></li>
		      </ul>
		    </div>	
		</div>
	</nav> 
</header>
<script>
	let site_url = '<?php echo base_url()?>';
</script>