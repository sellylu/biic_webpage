<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Description" content="Behavioral Informatics & Interaction Computation Lab(BIIC)">
	<meta name="KeyWords" content="biic,nthu,ee,chih-chun lee,bsp,emotion,清大電機,人類行為訊息,互動計算,李祈均">
	<title>BIIC Lab</title>

	<link rel="stylesheet" id="aps-animate-css" href="../css/animate.css" type="text/css" media="all">
	<link rel="stylesheet" id="aps-frontend-css" href="../css/frontend.css" type="text/css" media="all">
	<link rel="stylesheet" id="responsive-css" href="../css/responsive.css" type="text/css" media="all">
	<link rel="stylesheet" id="tiny-lightbox-css" href="../css/viewbox.css" type="text/css" media="all">
	<link rel="stylesheet" id="jquery-ui-css" href="../css/jquery-ui.css" type="text/css" media="all">
	<link rel="stylesheet" id="style-css" href="../css/style.css" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="../js/frontend.js"></script>
	<script type="text/javascript" src="../js/jquery.smooth-scroll.js"></script>
	<script type="text/javascript" src="../js/jquery.scrollTo.js"></script>
	<script type="text/javascript" src="../js/jquery.nav.js"></script>
	<script type="text/javascript" src="../js/jquery.viewbox.js"></script>
	<script type="text/javascript" src="../js/core.min.js"></script>


<body class="single-portfolio-post">

<div id="fb-root" align="center"></div>
	<script>
		(function(d, s, id){
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement(s); js.id = id;
			js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<?php include "./blog_menu.php";?>

	<div id="revolve-page-content" align="center">
		
		<?php include "./" . $_GET['name'] . ".php";?>

		<div class="fb-comments"></div>
	</div> <!-- #revolve-page-content -->

</body>
</html>