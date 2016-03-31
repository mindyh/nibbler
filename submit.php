<!DOCTYPE html> 
<html>

<head> 
	<title>Nibbler | Stream</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />

	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="upstart.png" />
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>

</head> 

	
<body> 

<div data-role="page" id="submit" data-add-back-btn="true">

	<div data-role="header" style="margin:0;">
		<h1><a href="index.php">Nibbler</a></h1>
	</div>

	<div data-role="content">	
		<div id="submit-picture"> PICTURE GOES HERE </div>
		<form action="submit.php" method="get">
				<input type="text" value="Add Caption" maxlength="140"></p>
			<p><label for="turnon">Location?</label>
				<input type="radio" id="on" name="turnon" value="on" checked>
				<label for="on">Yes</label> 
				<input type="radio" id="off" name="turnon" value="off">
				<label for="off">No</label></p>
			<input class="submit" type="submit" value="Upload">
		</form>
	</div>

</div>

</body>
</html>