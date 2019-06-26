<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="en">
<head>
<title>CHATAIL </title>
 <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Business Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<meta name="google-signin-client_id" content="975962582703-vg4ipe9e4o311e5blcrrrt5a5qcf81bs.apps.googleusercontent.com">		
		 
	<script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
	
	<!-- css files -->
	<link href="css/font1-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style1.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/xcss.css" rel="stylesheet" type="text/css" media="all"/>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- //google fonts -->
	
	<script>
	function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
  
  </script>

	
</head>
<body>

<div class="signupform">
	<div class="container">
		<!-- main content -->
		<div class="agile_info">
			<div class="w3l_form">
				<div class="left_grid_info">
					<h1>
					<img src="images/logo.jpg" height="150" width="60"/>
					</h1>
					<p><strong> Bothering Mail Threads?	Let's chat rather...</strong></p>
					<img src="images/image.jpg"  />
				</div>
			</div>
			
			<div class="w3_info">
				<h2>Login to your Google Account</h2>	
						<div class='g-signin2' data-onsuccess='onSignIn'></div>  

				<p class="account1">Don't have a google account? <a href="https://www.google.com">Register here</a></p>
			</div>
		</div>
		<!-- //main content -->
	</div>
	<!-- footer -->
	<div class="footer">
		</div>
	<!-- footer -->
</div>
	
</body>
</html>