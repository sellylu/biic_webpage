<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="Description" content="Behavioral Informatics & Interaction Computation Lab(BIIC)">
	<meta name="KeyWords" content="biic,nthu,ee,chih-chun lee,bsp,emotion,清大電機,人類行為訊息,互動計算,李祈均">
	<title>BIIC Lab</title>

	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/news_box.css" />
	<style type="text/css">
		.select {
			display: inline;
		}
		.box.post h2 {
			line-height: 1;
		}
	</style>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128677328-2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-128677328-2');
	</script>

</head>
<body class="no-sidebar is-preload">
	<div id="page-wrapper">

		<?php include "./header.php";?>
		</section>

		<!-- Main -->
		<section id="main">
			<div class="container">

				<!-- Content -->
				<article class="box post">
					<!-- <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a> -->
					<header>
						<h2>Biic's Life</h2>
					</header>
					<div id="team-control">
						<div class="team-layout" style="margin: 2em 0;">
							<div class="select" id="layout-all">
								<button class="all alt">All</button>
							</div>
							<?php
								$now = date("Y",time());
								for($i=$now; $i>=2015; $i--) {
									echo "<div class=\"select\"><button>".$i."</button></div>";
								}
							?>
						</div>
						<div class="team-search">
							<input id="team-search-box" type="text" placeholder="Search">
							<i id="search-icon" class="fa fa-search"></i>
						</div>
					</div>

				</article>

				<?php include "posts.php"; ?>

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
	<script src="assets/js/news_card.js"></script>

	</body>
</html>