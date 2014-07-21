<html>
	<head>
		<title>Spread The Word - Set Up</title>
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
		<link rel="stylesheet" type="text/css" href="/css/setup.css">
	</head>
	<body>
		<div id="container">
			<div id="welcome_message">Get Started</div>
			<div class="setup_steps" id="setup_step1">
				<div class="steps_header">Step <b>1</b></div>
				Click this button 
				<i class="fa fa-long-arrow-right"></i> 
				<button id="setup_button" class="pure-button pure-button-primary"><i class="fa fa-location-arrow"></i>&nbsp;&nbsp;Set up my location</button>
			</div>
			<div class="setup_steps" id="setup_step2">
				<div class="steps_header">Step <b>2</b></div>
				<a href="<?php echo site_url("feed");?>">Spread the word</a>
			</div>
			<!--
			<div class="setup_steps" id="setup_step3">
				<div class="steps_header">(Most important) Step <b>3</b></div>
				Enjoy this cute piggy.
				<img src="forerica.jpg" id="pig_image"/>
			</div>
			-->
			
			<input type="hidden" id="input_lat_hidden" />
			<input type="hidden" id="input_long_hidden" />
		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="/js/setup.js"></script>
	</body>
</html>