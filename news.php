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
		
	</style>

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
					<div id="team-control">
						<div class="team-layout" style="margin: 2em 0;">
							<div class="select" id="layout-all">
								<button class="all alt">All</button>
							</div>
							<div class="select">
								<button class="phd">2018</button>
							</div>
							<div class="select">
								<button class="master">2017</button>
							</div>
							<div class="select">
								<button class="alumni">2016</button>
							</div>
							<div class="select">
								<button class="staff">2015</button>
							</div>
						</div>
						<div class="team-search">
							<input id="team-search-box" type="text" placeholder="Search">
							<i id="search-icon" class="fa fa-search"></i>
						</div>
					</div>

				</article>

				<!-- year 2018 -->
				<?php $year=2018; ?>
				<!-- 2018 avec -->
				<?php $id=32; $mon='10'; $name='avec'; $full=" AVEC in Seoul, Korea"; 
					  $img ="1791/29924550188_2583000864";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
									// echo $link.'<img src="https://farm2.staticflickr.com/'.$img.'_b.jpg"></a>';
									// echo substr($link,0,-1).'class="button">Read More →</a>';
									echo "<h4> Comming soon...</h4>"
									?>
							</div>	
						</section>
					</div>
				</article>
				<!-- 2018 icmi -->
				<?php $id=31; $mon='10'; $name='icmi'; $full=" ICMI in Boulder, Colorado, USA"; 
					  $img ="1791/29924550188_2583000864";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
									// echo $link.'<img src="https://farm2.staticflickr.com/'.$img.'_b.jpg"></a>';
									// echo substr($link,0,-1).'class="button">Read More →</a>';
									echo "<h4> Comming soon...</h4>"
									?>
							</div>	
						</section>
					</div>
				</article>
				<!-- 2018 rocling -->
				<?php $id=30; $mon='10'; $name='icmi'; $full=" ROCLING"; 
					  $img ="1791/29924550188_2583000864";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
									// echo $link.'<img src="https://farm2.staticflickr.com/'.$img.'_b.jpg"></a>';
									// echo substr($link,0,-1).'class="button">Read More →</a>';
									echo "<h4> Comming soon...</h4>"
									?>
							</div>	
						</section>
					</div>
				</article>
				<!-- 2018 interspeech -->
				<?php $id=29; $mon='9'; $name='interspeech'; $full=" Interspeech in Hyderabad, India"; 
					  $img ="1791/29924550188_2583000864";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
									// echo $link.'<img src="https://farm2.staticflickr.com/'.$img.'_b.jpg"></a>';
									// echo substr($link,0,-1).'class="button">Read More →</a>';
									echo "<h4> Comming soon...</h4>"
									?>
							</div>	
						</section>
					</div>
				</article>
				<!-- 2018 annual outing -->
				<?php $id=28; $mon='8'; $name='outing'; $full=" BIIC Annual Outing"; 
					  $img ="1873/30290723668_d6cb31347e";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
				<!-- 2018 icme -->
				<?php $id=27; $mon='07'; $name='icme'; $full=" ICME in San Diego, California, USA"; 
					  $img ="1791/29924550188_2583000864";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo ($year+1); ?>">
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
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
				<?php $year=2016; ?>
				<!-- 2016 Xmas -->
				<?php $id=14; $mon='12'; $name='xmas'; $full=" BIIC Christmas Party"; 
					  $img ="911/41145644934_d14c23b719";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo ($year+1); ?>">
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
				<!-- 2016 teacher's day -->
				<?php $id=13; $mon='9'; $name='teacher'; $full=" BIIC Teachers' Day"; 
					  $img ="974/40055929580_161cc2122f";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
				<!-- 2016 interspeech -->
				<?php $id=12; $mon='9'; $name='interspeech'; $full=" Interspeech in San Francisco, California, USA"; 
					  $img ="832/41862902431_f5dc4c3b49";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
				<!-- 2016 graduation -->
				<?php $id=11; $mon='6'; $name='graduation'; $full=" BIIC Graduation"; 
					  $img ="966/41863006321_6efea8857a";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
				<!-- 2016 annual outing -->
				<?php $id=9; $mon='4'; $name='outing'; $full=" BIIC Annual Outing"; 
					  $img ="977/41820393442_20af3f6c02";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
				<!-- 2016 ICASSP -->
				<?php $id=8; $mon='3'; $name='icassp'; $full=" ICASSP in Shanghai, China"; 
					  $img ="964/26994955627_03eb8cb117";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
				<?php $year=2015; ?>
				<!-- 2015 year end party -->
				<?php $id=7; $mon='1'; $name='yearend'; $full=" BIIC Year End Party"; 
					  $img ="980/40056293600_f8488b96b3";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo ($year+1); ?>">
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
				<!-- 2015 interspeech -->
				<?php $id=3; $mon='9'; $name='interspeech'; $full=" Interspeech in Dresden, Germany"; 
					  $img ="966/26995102007_1878afd9b2";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
				<!-- 2015 ICASSP -->
				<?php $id=2; $mon='4'; $name='interspeech'; $full=" ICASSP in Brisbane, Australia"; 
					  $img ="981/26995101797_2d0e76fecc";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
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
				<?php $year=2014; ?>
				<!-- 2015 year end party -->
				<?php $id=1; $mon='1'; $name='yearend'; $full=" BIIC Year End Party"; 
					  $img ="970/26995176497_47cd03a4c0";
				?>
				<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo ($year+1); ?>">
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