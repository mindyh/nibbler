<!DOCTYPE html> 
<html>

<head>
	<title>Nibbler | Camera</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />

	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="upstart.png">
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>

</head> 

	
<body> 

<div data-role="page" id="camera" data-add-back-btn="true">

	<!-- /header -->
	<div data-role="header" style="margin:0;" >
		<h1>Take Photo</h1>
	</div>

	<div data-role="content">	
		<h2>Camera page<span id="username"></span></h2>
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example">
			<ul> 
				<li></li>
				<li><a href="#confirm" id="camera" data-icon="custom"></a></li>
				<li></li>
			</ul>
		</div> 	
	</div>
</div>

<div data-role="page" id="confirm">

	<!-- /header -->
	<div data-role="header" style="margin:0;">
		<h1>Confirm</h1>
	</div>

	<div data-role="content">	
		<h2>confirm page<span id="username"></span></h2>
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" >
			<ul> 
				<li><a href="#camera" id="redo" data-icon="custom"></a></li>
				<li><a href="submit.php" id="check" data-icon="custom" data-theme="b"></a></li>
			</ul>
		</div> 	
	</div>
</div>	



</body>
</html>