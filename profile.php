<!DOCTYPE html> 
<html>

<head>
	<title>Nibbler | <span id="username">Username</span></title> 
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

<!-- Start of first page: #profile -->
<div data-role="page" id="profile">

	<!-- /header -->
	<? readfile("header.inc"); ?>

	<div data-role="content">	
		<h2>Profile <span id="username"></span></h2>
		<p><a href="#history" data-role="button">history</a></p>	
		<p><a href="#favorites" data-role="button">favorites</a></p>
	</div><!-- /content -->
	
	<!-- footer -->
	<? readfile("footer.inc"); ?>
</div>


<!-- Start of second page: #history -->
<div data-role="page" id="history">

	<!-- /header -->
	<? readfile("header.inc"); ?>

	<div data-role="content">	
		<h2>History</h2>
		<p>submit.php</p>	
		<p><a href="#favorites" data-role="button">favorites</a></p>
	</div><!-- /content -->
	
	<!-- footer -->
	<? readfile("footer.inc"); ?>
</div><!-- /page two -->


<!-- Start of third page: #favorites -->
<div data-role="page" id="favorites">

	<!-- header -->
	<? readfile("header.inc"); ?>

	<div data-role="content" data-theme="d">	
		<h2>Favorites</h2>
		<p><a href="#profile" data-role="button">profile</a></p>	
		<p><a href="#history" data-role="button">history</a></p>
	</div><!-- /content -->
	
	<!-- footer -->
	<? readfile("footer.inc"); ?>
</div>

<script type="text/javascript">
// This handles all the swiping between each page. You really
// needn't understand it all.
$(document).on('pageshow', 'div:jqmData(role="page")', function(){

     var page = $(this), nextpage, prevpage;
     // check if the page being shown already has a binding
      if ( page.jqmData('bound') != true ){
            // if not, set blocker
            page.jqmData('bound', true)
            // bind
                .on('swipeleft.paginate', function() {
                    console.log("binding to swipe-left on "+page.attr('id'));
                    nextpage = page.next('div[data-role="page"]');
                    if (nextpage.length > 0) {
                       $.mobile.changePage(nextpage,{transition: "slide"}, false, true);
                        }
                    })
                .on('swiperight.paginate', function(){
                    console.log("binding to swipe-right "+page.attr('id'));
                    prevpage = page.prev('div[data-role="page"]');
                    if (prevpage.length > 0) {
                        $.mobile.changePage(prevpage, {transition: "slide",
	reverse: true}, true, true);
                        };
                     });
            }
        });

</script>

</body>
</html>