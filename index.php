<!DOCTYPE HTML>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="Description" content="Behavioral Informatics & Interaction Computation Lab(BIIC)">
	<meta name="KeyWords" content="biic,nthu,ee,chih-chun lee,bsp,emotion,清大電機,人類行為訊息,互動計算,李祈均">
	<title>BIIC Lab</title>

	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/swipe.css" />

	<style type="text/css">
		.pic {
			width: 24%;
			display: inline-grid;
			vertical-align: top;
			padding-bottom: 5px;
		}
		@media (max-width: 980px) {
			.pic {
				width: 30%;
			}
		}
		.cute {
			font-family: Comic Sans MS, 'Source Sans Pro', '微軟正黑體', 'Microsoft JhengHei', sans-serif;
		}

	</style>

</head>

<body class="homepage is-preload">
	<div id="page-wrapper">

		<?php include "./header.php";?>
		</section>

		<!-- Banner -->
		<div id="slider" class="slideshow-container image featured swipe" style="margin: 0;">
			<div class="swipe-wrap">
				<div>
					<section id="banner" style="background: url(./images/news.jpg); background-position: center; background-size: cover; margin:0;" class="mySlides slide-fade">
						<header>
							<h2>BIIC LAB</h2>
							<p style="text-align: center;">Behavioral Informatics &amp; Interaction Computation Lab<br></p>
						</header>
					</section>
				</div>
				<div>
					<section id="banner" style="background: url(./images/spark.jpg); background-position: center; background-size: cover; margin:0;" class="mySlides slide-fade">
						<header>
							<h2>SP·ARK</h2>
							<p class="cute" style="text-align: center;">IDEAS TO INTELLIGENCE<br>BIIC X CCRG</p>
						</header>
					</section>
				</div>
			</div>
			<div id="arrow">
				<a class="prev" onclick="slider.prev()">&#10094;</a>
				<a class="next" onclick="slider.next()">&#10095;</a>
			</div>
		</div>


		<!-- Main -->
		<section id="main">
			<div class="container">
				<div class="row">
					<div class="col-12">

						<!-- Portfolio -->
						<section>
							<header class="major">
								<h2>Lab Facilities</h2>
							</header>

							<div id="overall"><img src="./images/facilities/bg.JPG"></div>
							
							<div style="padding: 1em 0; text-align: center;">
								<h2>The enviroment of BIIC Lab.&emsp;</h2>
								<i>We are coding here.</i>
							</div>
							<div class="image-gallery" style="text-align: center;">
								<div class="pic"><img src="./images/facilities/01.JPG"></div>
								<div class="pic"><img src="./images/facilities/02.JPG"></div>
								<div class="pic"><img src="./images/facilities/03.JPG"></div>
								<div class="pic"><img src="./images/facilities/04.JPG"></div>
								<div class="pic"><img src="./images/facilities/05.JPG"></div>
								<div class="pic"><img src="./images/facilities/07.JPG"></div>
								<div class="pic"><img src="./images/facilities/08.JPG"></div>
								<div class="pic"><img src="./images/facilities/entry.JPG"></div>
							</div>

							<div style="padding: 1em 0; text-align: center;">
								<h2>The enviroment of SP·ARK.&emsp;</h2>
							</div>
							<div id="overall"><img src="./images/spark/IMG_0041.jpg"></div>
							<div class="image-gallery" style="text-align: center;">
								<div class="pic"><img src="./images/spark/IMG_0012.jpg"></div>
								<div class="pic"><img src="./images/spark/IMG_0028.jpg"></div>
								<div class="pic"><img src="./images/spark/IMG_0020.jpg"></div>
								<div class="pic"><img src="./images/spark/IMG_0015.jpg"></div>
								<div class="pic"><img src="./images/spark/IMG_0014.jpg"></div>
								<div class="pic"><img src="./images/spark/IMG_0013.jpg"></div>
							</div>
						</section>

					</div>
					<div class="col-12">


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
	<script src="assets/js/swipe.js"></script>

	<script>window.slider = Swipe(document.getElementById('slider'));</script>

</body>
</html>