<?php
require_once 'db_config.php';
require_once 'db_class.php';

$db = new DB();
$db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="Description" content="Behavioral Informatics & Interaction Computation Lab(BIIC)">
	<meta name="KeyWords" content="biic,nthu,ee,chih-chun lee,jeremy lee,bsp,emotion,清大電機,人類行為訊息,互動計算,李祈均">
	<title>BIIC Lab</title>

	<link rel="stylesheet" href="assets/css/main.css" />


	<style type="text/css">
	li.pub {
		text-align: justify;
		line-height: 1.5;
		margin-top: 0.5em;
	} 
	.pub strong {
		font-weight: 600;
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
					<header>
						<h2>Publications</h2>
						<!-- <p>Lorem ipsum dolor sit amet feugiat</p> -->
					</header>
		<?php
		$title = $db->query("SELECT * FROM base_pub_meta;");
		while($r = mysqli_fetch_array($title)) { 
			echo "<!-- $r[name] -->";
		?>
		<section>
			<header>
				<h3><? echo $r['name']; ?></h3>
			</header>
			<ol>
				<?php
				$data = $db->query("SELECT pub FROM base_pub where type='$r[short]' order by id desc;");
				while($s = mysqli_fetch_array($data)) { ?>
				<li class="pub"><? echo str_replace('Chi-Chun Lee', '<strong>Chi-Chun Lee</strong>', $s['pub']); ?></li>
				<? } ?>
			</ol>
		</section>
		<? } ?>


				</article>

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