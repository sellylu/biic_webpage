<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="Description" content="Behavioral Informatics & Interaction Computation Lab(BIIC)">
	<meta name="KeyWords" content="biic,nthu,ee,chih-chun lee,bsp,emotion,清大電機,人類行為訊息,互動計算,李祈均">
	<title>BIIC Lab</title>

	<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="no-sidebar is-preload">
	<script>
		(function(d, s, id){
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement(s); js.id = id;
			js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<div id="page-wrapper">

		<?php include "./header.php";?>
		</section>

		<!-- Main -->
		<section id="main">
			<div class="container">
				<div class="row">

						<div class="col-4 col-12-medium">

							<!-- Sidebar -->
							<section class="box">
								<header>
									<h3>Feugiat consequat</h3>
								</header>
								<ul class="divided">
									<li><a href="#">Sed et blandit consequat sed</a></li>
									<li><a href="#">Hendrerit tortor vitae sapien dolore</a></li>
									<li><a href="#">Sapien id suscipit magna sed felis</a></li>
									<li><a href="#">Aptent taciti sociosqu ad litora</a></li>
								</ul>
								<footer>
									<a href="#" class="button alt">Ipsum consequat</a>
								</footer>
							</section>

						</div>


						<div class="col-8 col-12-medium imp-medium">

							<!-- Content -->
							<article class="box post">
								<!-- <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a> -->
								<header>
									<h2 style="padding-bottom: 0.5em"><?php echo $_GET['full']; ?></h2>
									<!-- <p>Lorem ipsum dolor sit amet feugiat</p> -->
									<a href=<?php echo '"./news.php#post-'.$_GET['id'].'"'; ?> style="font-size: 150%"><em>Back</em></a>
								</header>
								<section>
									<?php include "./blog/".$_GET['name'].".php" ?>
									<div class="fb-comments"></div>
								</section>

							</article>

						</div>
				</div>
			</div>
		</section>

		<?php include "./footer.php";?>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

	</body>
</html>