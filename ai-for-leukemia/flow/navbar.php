<!-- Nav -->
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="#">AHEAD</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		<?php
			$uris = explode("/", $_SERVER['PHP_SELF']);
			$here = substr($uris[count($uris)-1],0,-4);
			$disp = array("Home", "Result");
			$file = array("index", "result");
			for($j=0;$j<count($disp);$j++) {
				if (!strcmp($here,$file[$j])) {
					echo "<li class=\"nav-item active\"><a class=\"nav-link\" href=\"".$file[$j].".php\">".$disp[$j]."</a></li>";
				} else {
					echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"".$file[$j].".php\">".$disp[$j]."</a></li>";
				}
			}
		?>
		</ul>
	</div>
	<form class="form-inline">

		<span class="func oi oi-plus" style="color: white; margin-right: .5rem; font-size: larger;"></span>
		<i class="func fas fa-user" style="margin-right: .5rem; background-color: #ccc"></i>
		<h5 style="margin:0; color: white;">Hi, User.</h5>
		<span class="func oi oi-cog" style="color: white; margin-right: .5rem; font-size: larger;"></span>
		<!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
		<!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
	</form>
</nav>
