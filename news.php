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
						<!-- <p>Lorem ipsum dolor sit amet feugiat</p> -->
					</header>
					<p>
						Praesent a dolor leo. Duis in felis in tortor lobortis volutpat et pretium tellus. Vestibulum ac ante nisl,
						a elementum odio. Duis semper risus et lectus commodo fringilla. Maecenas sagittis convallis justo vel mattis.
						placerat, nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc,
						eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean
						elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor.
					</p>

				</article>

				<!-- year 2018 -->
				<?php $year=2018; ?>
				<!-- 2018 icmi -->
				<?php $id=30; $mon='10'; $full=" ICME in San Diego, California, USA"; 
					  $img ="https://farm2.staticflickr.com/1791/29924550188_2583000864_b.jpg";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post">
					<div class="row">
						<header class="post-meta col-12-medium col-2">
							<h3 class="entry-time" itemprop="datePublished"><?php echo $year.'.'.$mon; ?></h3>
						</header>
						<section class="post-content col-12-medium col-10">
							<header>
								<h2>
									<!-- <a href="./blog.php?id=30&name=2018icmi&full=2018 ICMI in Boulder, Colorado, USA" rel="bookmark">2018 ICMI in Boulder, Colorado, USA</a> -->
									<a href="#post-30">2018 ICMI in Boulder, Colorado, USA</a>
								</h2>
							</header>
							<div>
								<!-- <figure><a href="./blog.php?id=30&name=2018icmi&full=2018 ICMI in Boulder, Colorado, USA">
									<img src="https://farm1.staticflickr.com/916/42762968535_1867d96a27_b.jpg">
								</a></figure>
								<a class="read-more" href="./blog.php?id=30&name=2018icmi&full=2018 ICMI in Boulder, Colorado, USA">Read More →</a> -->
								<h4>Coming soon...</h4>
							</div>	
						</section>
					</div>
				</article>
				<!-- 2018 icme -->
				<?php $id=27; $mon='07'; $name='icme'; $full=" ICME in San Diego, California, USA"; 
					  $img ="1791/29924550188_2583000864";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post">
					<div class="row">
						<header class="post-meta col-12-medium col-2">
							<h3 class="entry-time" itemprop="datePublished"><?php echo $year.'.'.$mon; ?></h3>
						</header>
						<section class="post-content col-12-medium col-10">
							<header>
								<h2>
									<?php
									$link='<a href="./blog.php?id='.$id.'&name='.$year.$name.'&full='.$year.$full.'">';
									echo $link.$year.$full.'</a>';
									echo '</h2></header>';
									echo '<div>';
									echo $link.'<img src="https://farm2.staticflickr.com/'.$img.'_b.jpg"></a>';
									echo substr($link,0,-1).'class="button">Read More →</a>';
									?>
							</div>	
						</section>
					</div>
				</article>
				<!-- 2018 embc -->
				<?php $id=26; $mon='07'; $name='embc'; $full=" EMBC in Honolulu, Hawaii, USA"; 
					  $img ="916/42762968535_1867d96a27";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post">
					<div class="row">
						<header class="post-meta col-12-medium col-2">
							<h3 class="entry-time" itemprop="datePublished"><?php echo $year.'.'.$mon; ?></h3>
						</header>
						<section class="post-content col-12-medium col-10">
							<header>
								<h2>
									<?php
									$link='<a href="./blog.php?id='.$id.'&name='.$year.$name.'&full='.$year.$full.'">';
									echo $link.$year.$full.'</a>';
									echo '</h2></header>';
									echo '<div>';
									echo $link.'<img src="https://farm2.staticflickr.com/'.$img.'_b.jpg"></a>';
									echo substr($link,0,-1).'class="button">Read More →</a>';
									?>
							</div>	
						</section>
					</div>
				</article>
				<!-- 2018 ai in healthcare -->
				<?php $id=25; $mon='06'; $name='rework'; $full=" AI in Healthcare in Hong Kong"; 
					  $img ="1755/42014712464_3f6738b74f";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post">
					<div class="row">
						<header class="post-meta col-12-medium col-2">
							<h3 class="entry-time" itemprop="datePublished"><?php echo $year.'.'.$mon; ?></h3>
						</header>
						<section class="post-content col-12-medium col-10">
							<header>
								<h2>
									<?php
									$link='<a href="./blog.php?id='.$id.'&name='.$year.$name.'&full='.$year.$full.'">';
									echo $link.$year.$full.'</a>';
									echo '</h2></header>';
									echo '<div>';
									echo $link.'<img src="https://farm2.staticflickr.com/'.$img.'_b.jpg"></a>';
									echo substr($link,0,-1).'class="button">Read More →</a>';
									?>
							</div>	
						</section>
					</div>
				</article>
				<!-- 2018 icassp -->
				<?php $id=24; $mon='04'; $name='icassp'; $full=" ICASSP in Calgary, Canada"; 
					  $img ="951/41862304591_502fbdef99";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post">
					<div class="row">
						<header class="post-meta col-12-medium col-2">
							<h3 class="entry-time" itemprop="datePublished"><?php echo $year.'.'.$mon; ?></h3>
						</header>
						<section class="post-content col-12-medium col-10">
							<header>
								<h2>
									<?php
									$link='<a href="./blog.php?id='.$id.'&name='.$year.$name.'&full='.$year.$full.'">';
									echo $link.$year.$full.'</a>';
									echo '</h2></header>';
									echo '<div>';
									echo $link.'<img src="https://farm2.staticflickr.com/'.$img.'_b.jpg"></a>';
									echo substr($link,0,-1).'class="button">Read More →</a>';
									?>
							</div>	
						</section>
					</div>
				</article>
				<!-- year 2017 -->
				<?php $year=2017; ?>
				<!-- 2017 year end party -->
				<?php $id=23; $mon='02'; $name='yearend'; $full=" BIIC Year End Party"; 
					  $img ="911/40963408205_452d78888c";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post">
					<div class="row">
						<header class="post-meta col-12-medium col-2">
							<h3 class="entry-time" itemprop="datePublished"><?php echo ($year+1).'.'.$mon; ?></h3>
						</header>
						<section class="post-content col-12-medium col-10">
							<header>
								<h2>
									<?php
									$link='<a href="./blog.php?id='.$id.'&name='.$year.$name.'&full='.$year.$full.'">';
									echo $link.$year.$full.'</a>';
									echo '</h2></header>';
									echo '<div>';
									echo $link.'<img src="https://farm2.staticflickr.com/'.$img.'_b.jpg"></a>';
									echo substr($link,0,-1).'class="button">Read More →</a>';
									?>
							</div>	
						</section>
					</div>
				</article>
				<!-- 2017 Xmas -->
				<?php $id=22; $mon='12'; $name='xmas'; $full=" BIIC Christmas Party"; 
					  $img ="978/41144745484_d4e1cb6b1e";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post">
					<div class="row">
						<header class="post-meta col-12-medium col-2">
							<h3 class="entry-time" itemprop="datePublished"><?php echo $year.'.'.$mon; ?></h3>
						</header>
						<section class="post-content col-12-medium col-10">
							<header>
								<h2>
									<?php
									$link='<a href="./blog.php?id='.$id.'&name='.$year.$name.'&full='.$year.$full.'">';
									echo $link.$year.$full.'</a>';
									echo '</h2></header>';
									echo '<div>';
									echo $link.'<img src="https://farm2.staticflickr.com/'.$img.'_b.jpg"></a>';
									echo substr($link,0,-1).'class="button">Read More →</a>';
									?>
							</div>	
						</section>
					</div>
				</article>
				<!-- 2017 ACII -->
				<?php $id=21; $mon='10'; $name='acii'; $full=" ACII in San Antonio, Texas, USA"; 
					  $img ="944/41143390094_2a0f5bd799";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post">
					<div class="row">
						<header class="post-meta col-12-medium col-2">
							<h3 class="entry-time" itemprop="datePublished"><?php echo $year.'.'.$mon; ?></h3>
						</header>
						<section class="post-content col-12-medium col-10">
							<header>
								<h2>
									<?php
									$link='<a href="./blog.php?id='.$id.'&name='.$year.$name.'&full='.$year.$full.'">';
									echo $link.$year.$full.'</a>';
									echo '</h2></header>';
									echo '<div>';
									echo $link.'<img src="https://farm2.staticflickr.com/'.$img.'_b.jpg"></a>';
									echo substr($link,0,-1).'class="button">Read More →</a>';
									?>
							</div>	
						</section>
					</div>
				</article>
				<!-- 2017 annual outing -->
				<?php $id=20; $mon='09'; $name='outing'; $full=" BIIC Annual Outing"; 
					  $img ="949/41861725611_440cc89acd";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post">
					<div class="row">
						<header class="post-meta col-12-medium col-2">
							<h3 class="entry-time" itemprop="datePublished"><?php echo $year.'.'.$mon; ?></h3>
						</header>
						<section class="post-content col-12-medium col-10">
							<header>
								<h2>
									<?php
									$link='<a href="./blog.php?id='.$id.'&name='.$year.$name.'&full='.$year.$full.'">';
									echo $link.$year.$full.'</a>';
									echo '</h2></header>';
									echo '<div>';
									echo $link.'<img src="https://farm2.staticflickr.com/'.$img.'_b.jpg"></a>';
									echo substr($link,0,-1).'class="button">Read More →</a>';
									?>
							</div>	
						</section>
					</div>
				</article>
				<!-- 2017 interspeech -->
				<?php $id=19; $mon='08'; $name='interspeech'; $full=" Interspeech in Stockholm, Sweden"; 
					  $img ="867/40055290200_374f70f9a9";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post">
					<div class="row">
						<header class="post-meta col-12-medium col-2">
							<h3 class="entry-time" itemprop="datePublished"><?php echo $year.'.'.$mon; ?></h3>
						</header>
						<section class="post-content col-12-medium col-10">
							<header>
								<h2>
									<?php
									$link='<a href="./blog.php?id='.$id.'&name='.$year.$name.'&full='.$year.$full.'">';
									echo $link.$year.$full.'</a>';
									echo '</h2></header>';
									echo '<div>';
									echo $link.'<img src="https://farm2.staticflickr.com/'.$img.'_b.jpg"></a>';
									echo substr($link,0,-1).'class="button">Read More →</a>';
									?>
							</div>	
						</section>
					</div>
				</article>
				<!-- 2017 sws -->
				<?php $id=18; $mon='08'; $name='sws'; $full=" SWS"; 
					  $img ="962/41862407051_34f04a35e0";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post">
					<div class="row">
						<header class="post-meta col-12-medium col-2">
							<h3 class="entry-time" itemprop="datePublished"><?php echo $year.'.'.$mon; ?></h3>
						</header>
						<section class="post-content col-12-medium col-10">
							<header>
								<h2>
									<?php
									$link='<a href="./blog.php?id='.$id.'&name='.$year.$name.'&full='.$year.$full.'">';
									echo $link.$year.$full.'</a>';
									echo '</h2></header>';
									echo '<div>';
									echo $link.'<img src="https://farm2.staticflickr.com/'.$img.'_b.jpg"></a>';
									echo substr($link,0,-1).'class="button">Read More →</a>';
									?>
							</div>	
						</section>
					</div>
				</article>
				<!-- 2017 embc -->
				<?php $id=17; $mon='07'; $name='embc'; $full=" EMBC in Jeju Island, Korea"; 
					  $img ="872/41145181114_8fdc9cbd10";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post">
					<div class="row">
						<header class="post-meta col-12-medium col-2">
							<h3 class="entry-time" itemprop="datePublished"><?php echo $year.'.'.$mon; ?></h3>
						</header>
						<section class="post-content col-12-medium col-10">
							<header>
								<h2>
									<?php
									$link='<a href="./blog.php?id='.$id.'&name='.$year.$name.'&full='.$year.$full.'">';
									echo $link.$year.$full.'</a>';
									echo '</h2></header>';
									echo '<div>';
									echo $link.'<img src="https://farm2.staticflickr.com/'.$img.'_b.jpg"></a>';
									echo substr($link,0,-1).'class="button">Read More →</a>';
									?>
							</div>	
						</section>
					</div>
				</article>
				<!-- 2017 graduation -->
				<?php $id=16; $mon='06'; $name='graduation'; $full=" BIIC Graduation"; 
					  $img ="968/41819736722_304a68a930";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post">
					<div class="row">
						<header class="post-meta col-12-medium col-2">
							<h3 class="entry-time" itemprop="datePublished"><?php echo $year.'.'.$mon; ?></h3>
						</header>
						<section class="post-content col-12-medium col-10">
							<header>
								<h2>
									<?php
									$link='<a href="./blog.php?id='.$id.'&name='.$year.$name.'&full='.$year.$full.'">';
									echo $link.$year.$full.'</a>';
									echo '</h2></header>';
									echo '<div>';
									echo $link.'<img src="https://farm2.staticflickr.com/'.$img.'_b.jpg"></a>';
									echo substr($link,0,-1).'class="button">Read More →</a>';
									?>
							</div>	
						</section>
					</div>
				</article>
				<!-- 2017 ICASSP -->
				<?php $id=15; $mon='03'; $name='icassp'; $full=" ICASSP in New Orleans, Louisiana, USA"; 
					  $img ="977/26994639517_8f4ecc1813";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post">
					<div class="row">
						<header class="post-meta col-12-medium col-2">
							<h3 class="entry-time" itemprop="datePublished"><?php echo $year.'.'.$mon; ?></h3>
						</header>
						<section class="post-content col-12-medium col-10">
							<header>
								<h2>
									<?php
									$link='<a href="./blog.php?id='.$id.'&name='.$year.$name.'&full='.$year.$full.'">';
									echo $link.$year.$full.'</a>';
									echo '</h2></header>';
									echo '<div>';
									echo $link.'<img src="https://farm2.staticflickr.com/'.$img.'_b.jpg"></a>';
									echo substr($link,0,-1).'class="button">Read More →</a>';
									?>
							</div>	
						</section>
					</div>
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