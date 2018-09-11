<!-- Header -->
<section id="header" style="padding-top: 2em;">

	<!-- Logo -->
	<h1><a href="./"><img src="images/icon/biiclab-1.png" style="width: initial; height: 3em;"></a></h1>

	<!-- Nav -->
	<nav id="nav">
		<ul>
			<?php
				$uris = explode("/", $_SERVER['PHP_SELF']);
				$here = substr($uris[count($uris)-1],0,-4);
				$disp = array("Home", "Introduction","News","Our Team","Research","Professor","Publications");//,"Lab Facilities");
				$file = array("index", "intro","news","our_team","research","cclee","publications");//,"lab_fac");
				for($j=0;$j<count($disp);$j++) {
					if ((!strcmp($here,$file[$j])) or ((!strcmp("news",$file[$j])) and (!strcmp($here,"blog")))) {
						echo "<li class=\"current\"><a href=\"".$file[$j].".php\">".$disp[$j]."</a></li>";
					} else {
						echo "<li><a href=\"".$file[$j].".php\">".$disp[$j]."</a></li>";
					}
				}
			?>
		</ul>
	</nav>

