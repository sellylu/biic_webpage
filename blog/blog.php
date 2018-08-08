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

		<?php include "../header.php";?>
		</section>

		<!-- Main -->
		<section id="main">
			<div class="container">

				<!-- Content -->
				<article class="box post">
					<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
					<header>
						<h2><?php echo $_GET['full']; ?></h2>
						<p>Lorem ipsum dolor sit amet feugiat</p>
					</header>
					<p>
						Praesent a dolor leo. Duis in felis in tortor lobortis volutpat et pretium tellus. Vestibulum ac ante nisl,
						a elementum odio. Duis semper risus et lectus commodo fringilla. Maecenas sagittis convallis justo vel mattis.
						placerat, nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc,
						eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean
						elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor.
					</p>



<?php
echo '<div id="'.$_GET['name'].'" class="gallery_bg">';
echo '<p class="toleft"><a class="rbtn alpha blue" href="../news.php#post-'.$_GET['id'].'"><big><em>Back</em></big></a></p>';
?>

<a data-flickr-embed="true"  href="https://www.flickr.com/photos/biic-nthuee/albums/72157699423073754" title="2018 ICME"><img src="https://farm2.staticflickr.com/1791/29924550188_2583000864_b.jpg" width="1024" alt="2018 ICME"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</div>



					<section>
						<header>
							<h3>So in conclusion ...</h3>
						</header>
						<p>
							Nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc,
							eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean
							elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
							sit amet nullam consequat feugiat dolore tempus. Elementum odio duis semper risus et lectus commodo fringilla.
							Maecenas sagittis convallis justo vel mattis.
						</p>
					</section>
				</article>

			</div>
		</section>

		<?php include "../footer.php";?>

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