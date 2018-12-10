<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
	<title>Flow | AHEAD</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="Description" content="We develop patient-centered AI algorithms to provide clinical decision support for physicians in treating hematologic diseases by conducting efficient and comprehensive disease status assessment throughout patient treatment course, reducing interpretation idiosyncrasies and alleviate manpower shortage gap for clinical demands.">
	<meta name="KeyWords" content="ahead,hematologic analytic,leukemia,prognosis,biic,nthu,tai-cheng,sctc,ntuh,血癌,智能化,血液診斷,預後預測,臺大醫院,清大">

	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
	<link rel="stylesheet" href="assets/css/badge.css" />
	<link rel="stylesheet" href="assets/css/btn.css" />
	<style type="text/css">
		b {
			color: inherit;
		}
		input, select, textarea {
			font-size: 95% !important;
			background-color: #fff !important; 
		}
		input[type="text"]:disabled {
			background-color: rgba(255,255,255,0.75) !important;
		}
		.fileinput-button {
			position: relative;
			overflow: hidden;
			display: inline-block;
		}
		.fileinput-button input {
			position: absolute;
			top: 0;
			right: 0;
			margin: 0;
			opacity: 0;
			font-size: 200px !important;
			cursor: pointer;
		}
		table td {
			padding: 0.1em 0.4em;
		}
		table {
			text-align: center;
			color: #888;
			font-size: 80%;
		}
/*		#header {
			width: 22vw;
		}
		#main {
			margin-left: 22vw;
		}
		#footer {
			margin-left: 22vw;
		}*/
		#myProgress {
			width: 100%;
			background-color: grey;
		}
		#myBar {
			width: 0.1%;
			height: 30px;
			background-color: green;
		}
		#report form button {
			margin-top: -3em;
		}
		@media screen and (max-width: 1080px) {
			#report form button {
				margin-top: -7em;
			}
		}
	</style>
</head>
<body class="is-preload">

	<!-- Header -->
	<div id="header">

		<div class="top">
			<!-- Logo -->
			<div id="logo">
				<a href="./">
					<span class="image">
						<img src="../images/icon/logo_dark.png" alt="AHEAD" />
					</span>
					<h1 id="title" style="padding-top: 15px">AHEAD-Flow</h1>
					<p style="margin-top: 1.5em">Residual Leukemia Cell Detection Model</p>
				</a>
			</div>
			<!-- Nav -->
			<div style="text-align: left; padding: 0 1em;">
				<div style="text-align: justify; font-size: 80%;">
					<h5 style="display: inline;">Search by&emsp;</h5>
					<select style="display: inline; width: calc(100% - 10em);" disabled>
						<option>Panel</option>
						<option>ID</option>
						<option>Test Date</option>
					</select>
					<select style="display: block; width: 100%; margin: 10pt 0;">
						<option>AML</option>
					</select>
					<table id="filter-sample">
						<thead>
							<tr>
								<td>ID</td>
								<td>Tested</td>
								<td>Panel</td>
								<td>Specimen</td>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>

			</div>
			<!-- <nav id="nav">
				<ul>
				</ul>


			</nav> -->

		</div>
		<div class="bottom">
			<ul class="icons">
				<li><i class="icon fa-user"><span>&emsp;Hi, User!&emsp;</span></i><i class="icon fa-sign-out"><span class="label">Setting</span></i></li>
			</ul>
			<!-- Social Icons -->
			<!-- <ul class="icons">
				<li><a href="tel:+886223123456;63576" class="icon fa-phone"><span class="label">Phone</span></a></li>
				<li><a href="mailto:ahead.taiwan@gamil.com" class="icon fa-envelope"><span class="label">Email</span></a></li>
			</ul> -->
		</div>

	</div>

	<!-- Main -->
	<div id="main">

		<!-- submit -->
		<section id="request" class="one dark cover">
			<div class="container" style="font-size: 80%">
				<form method="post" action="write.php"  enctype="multipart/form-data">
					<div class="row">
						<div class="col-4-narrow col-3-normal col-2">
							<label for="org">Request Organization</label>
							<input id="org" type="text" class="form-control" name="org" placeholder="">
						</div>
						<div class="col-4-narrow col-3-normal col-2">
							<label for="sID">Sample ID</label>
							<input type="text" class="form-control" name="sID" placeholder="0000">
						</div>
						<div class="col-4-narrow col-3-normal col-2">
							<label for="tDate">Test Date</label>
							<input type="text" id="datepicker" class="form-control" name="tDate" placeholder=<?php echo '"'.date("Y-m-d").'"'?>>
						</div>
					</div>
					<div class="row">
						<div class="col-4-narrow col-3-normal col-2">
							<label for="cytometer">Flow Cytometer</label>
							<select name="cytometer">
								<option value="BD®Calibur" selected>BD®Calibur</option>
								<option value="BD®Calibur-II">BD®Cantol-II</option>
								<option value="other">Other</option>
							</select>
						</div>
						<div class="col-4-narrow col-3-normal col-2">
							<label for="specimen">Specimen Type</label>
							<select name="specimen">
								<option value="Bone Marrow" selected>Bone Marrow</option>
								<option value="Peripheral Blood">Peripheral Blood</option>
								<option value="Lymph node">Lymph node</option>
								<option value="CSF">CSF</option>
								<option value="Tissue">Tissue</option>
								<option value="other">Other</option>
							</select>
						</div>
						<div class="col-4-narrow col-0">&nbsp;</div>
						<div class="col-4-narrow col-6-normal col-8" style="text-align: left;">
							<label for="testPanel">Test Panel(Select or Upload)</label>
							<select id="testPanel" name="testPanel" style="display:inline; position: inherit;width: 8em;">
								<option value="AML" selected>AML</option>
								<option value="other">Other</option>
							</select>
							<input type="file" name="panelToUploaded" id="panelToUploaded" style="position: relative;" hidden multiple>
							<input type="text" name="panelNew" id="panelNew" placeholder="input panel name" style="position: relative; width: 10em; display: none;" hidden>
						</div>
						<!-- <div class="col">
							<label for="low">Low Event count Flag</label>
							<h3 style="text-align: left;"><span class="badge badge-danger">True</span></h3>
						</div>
						<div class="col">
							<label for="hemodilution">Hemodilution Flag</label>
							<h3 style="text-align: left;"><span class="badge badge-secondary">False</span></h3>
						</div> -->
					</div>
					<div class="row">
						<div class="col-6" style="text-align: left;">
							<label for="low">Low Event Flag Threshold</label>
							<select id="low" style="display: inline; position: inherit; width: 8em">
								<option value="1000">&lt;1000</option>
								<option value="5000">&lt;5000</option>
								<option value="10000">10000</option>
								<option value="other">Other</option>
							</select>
							<input type="number" name="lowNew" id="lowNew" placeholder="input threshold" style="position: relative; width: 10em; display: none;">
						</div>
					</div>
					<div class="row">
						<div class="col-6" style="text-align: left;">
							<label for="fcsToUploaded">Upload fcs files</label>
							<input type="file" name="fcsToUploaded[]" id="fcsToUploaded" multiple>
						</div>
					</div>
					<div class="row">
						<div class="col-12-narrow col-9-normal col-6" style="text-align: left;">
							<label for="remark">Remark</label>
							<textarea type="text" name="remark" id="remark" rows="2" cols="80" style="margin-bottom: 2em;"></textarea>
						</div>
					</div>
					<div class="btn btn-success" onclick="move()" style="float: right; font-size: 95%">Submit Request</div>
				</form>
				<div id="myProgress" style="margin-top: 5em;">
					<div id="myBar"></div>
				</div>
			</div>
		</section>

		<section id="report" class="two" style="padding-top: 1em;">
			<header style="margin-bottom: 1em">
				<h3>Prediction Result</h3>
			</header>
			<div class="container" style="font-size: 80%">
				<form method="post" action="">
					<div class="row">
						<div class="col-4-narrow col-3-normal col-2">
							<label for="sID">Sample ID</label>
							<input type="text" class="form-control" name="sID" readonly>
						</div>
						<div class="col-4-narrow col-3-normal col-2">
							<label for="tDate">Test Date</label>
							<input type="text" class="form-control" name="tDate" readonly>
						</div>
						<div class="col-4-narrow col-3-normal col-2">
							<label for="rDate">Prediction Report Date</label>
							<input type="text" class="form-control" name="rDate" readonly>
						</div>
					</div>
					<div class="row gtr">
						<div class="col-4-narrow col-3-normal col-2">
							<label for="cytometer">Flow Cytometer</label>
							<input type="text" class="form-control" name="cytometer" readonly>
						</div>
						<div class="col-4-narrow col-3-normal col-2">
							<label for="specimen">Specimen Type</label>
							<input type="text" class="form-control" name="specimen" readonly>
						</div>
						<div class="col-4-narrow col-3-normal col-2">
							<label for="testPanel">Test Panel</label>
							<input type="text" class="form-control" name="testPanel" readonly>
						</div>
						<div class="col-0-narrow col-1-normal"></div>
						<div class="col-4-narrow col-3-normal col-2">
							<label for="low">Low Event count Flag</label>
							<h3 style="text-align: left;"><span name="low" class="badge badge-secondary">False</span></h3>
						</div>
						<div class="col-4-narrow col-3-normal col-2">
							<label for="hemodilution">Hemodilution Flag</label>
							<h3 style="text-align: left;"><span name="hemodilution" class="badge badge-secondary">False</span></h3>
						</div>
					</div>
					<div class="row aln-left" style="margin-top: .75em; font-size: 1.2em; text-align: left;">
						<div class="col-12">
							<h4 style="display: inline; font-weight: 600" >Prediction Result &amp; Probability:&emsp;</h4>
							<h3 id="result" style="display: inline;"></h3>
						</div>
					</div>
					<button type="submit" class="btn btn-success" style="float: right; font-size: 95%;">Export your report</button>
				</form>


				<div class="row gtr-25" style="width: auto">
					<div class="col-12-narrow col-6-normal col-7">
						<img id="3d" src="samples_result/plot/0001_3d.png" style="width: 100%;">
					</div>
					<div class="col-12-narrow col-6-normal col-5">
						<div class="row gtr-25 aln-middle">
							<div class="col-3">Select Tube</div>
							<div class="col-9">Select Markers for X-axis and Y-axis</div>
						</div>
						<div class="row gtr-25 aln-middle">
							<div class="col-2">
								<select><option>1</option></select>
							</div>
							<div class="col-10">
								<div class="row gtr-25 aln-middle aln-center">
									<div class="col-4">
										<select><option>CD45-PerCP</option></select>
									</div>
									<div class="col-8">
										<img id="scatter-A" src="samples_result/plot/0001_A.png" width="100%">
										<select><option>SSC-H</option></select>
									</div>
								</div>
							</div>
						</div>
						<div class="row gtr-25 aln-middle">
							<div class="col-2">
								<select><option>2</option></select>
							</div>
							<div class="col-10">
								<div class="row gtr-25 aln-middle aln-center">
									<div class="col-4">
										<select><option>CD11b-PE</option></select>
									</div>
									<div class="col-8">
										<img id="scatter-B" src="samples_result/plot/0001_B.png" width="100%">
										<select><option>HLA-DR-FITC</option></select>
									</div>
								</div>
							</div>
						</div>
						<div class="row gtr-25 aln-middle">
							<div class="col-2">
								<select><option>5</option></select>
							</div>
							<div class="col-10">
								<div class="row gtr-25 aln-middle aln-center">
									<div class="col-4">
										<select><option>CD13PE</option></select>
									</div>
									<div class="col-8">
										<img id="scatter-C" src="samples_result/plot/0001_A.png" width="100%">
										<select><option>CD16-FITC</option></select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


			</div>
		</section>

		<!-- About Me -->
<!-- 		<section id="about" class="three">
			<div class="container">


			</div>
		</section> -->



	</div>

	<!-- Footer -->
	<div id="footer">
		<!-- Copyright -->
		<ul class="copyright">
			<li>&copy; <a href="//biic.ee.nthu.edu.tw/ahead/"><u><b>A</b></u>i-assisted <u><b>HE</b></u>matologic <u><b>A</b></u>nalytic and <u><b>D</b></u>ecision Support (AHEAD)</a>. All rights reserved.</li><li>Design adapted from <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>
	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

	<script>
		var files = <?php $out = array();
		foreach (glob('samples/*.out') as $filename) {
			$p = pathinfo($filename);
			$out[] = $p['filename'];
		}
		echo json_encode($out); ?>;

		for(var i=0; i<files.length; i++) {
			getBrief(i);
		}
		function getBrief(i) {
			$.get("samples/"+files[i]+".out", function(data) {
				tr='<tr id="'+files[i]+'"><td><a class="report scrolly" href="#report" onclick="refresh(\''+files[i]+'\')">'+files[i]+'</a></td><td>';
				tr+=data.split('\n')[1].split(': ')[1].trim()+'</td><td>';
				tr+=data.split('\n')[5].split(': ')[1].trim()+'</td><td>';
				tr+=data.split('\n')[4].split(': ')[1].trim()+'</td></tr>';
				$("#filter-sample tbody").append(tr);
			});
		}

		$("#request [name*=sID]").val(("0000" + (Number(files[files.length-1])+1)).slice(-4));
		$("#request [name*=sID]").prop("readonly","readonly")
		// $("#request [name*=sID]").attr("placeholder", ("0000" + (Number(files[files.length-1])+1)).slice(-4));

		$( function() {
			$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });

		} );
		$("#testPanel").change(function() {
			var op = $(this).children().filter(":selected").val();
			if(op=="other") {
				$("#panelToUploaded").css("display","inline");
				$("#panelNew").css("display","inline");
			} else {
				$("#panelToUploaded").hide();
				$("#panelNew").hide();
			}
		});
		$("#low").change(function() {
			var op = $(this).children().filter(":selected").val();
			if(op=="other") {
				$("#lowNew").css("display","inline");
			} else {
				$("#lowNew").hide();
			}
		});
		
		function refresh(sID) {
			$("tr").removeClass("active");
			$("#"+sID).toggleClass("active");
			
			console.log(sID);
			$("#3d").attr("src","samples_result/plot/"+sID+"_3d.png");
			$("#scatter-A").attr("src","samples_result/plot/"+sID+"_A.png");
			$("#scatter-B").attr("src","samples_result/plot/"+sID+"_B.png");
			$("#scatter-C").attr("src","samples_result/plot/"+sID+"_C.png");
			$("#result").html("");
			$.get("samples/"+sID+".out", function(data) {
				console.log(data);
				data = data.split("\n")
				for(var i=0; i<data.length; i++) {
					var con = data[i].split(": ")[1].trim();
					$("#report input")[i].value = con;
				}
			});
			$.get("samples_result/"+sID+".out", function(data) {
				console.log(data);
				data = data.split("\n")
				for(var i=0; i<data.length; i++) {
					var con = data[i].split(": ")[1].trim();
					if(i<2) {
						$($("#report span")[i]).html(con);
						$($("#report span")[i]).removeClass("badge-danger badge-secondary")
						if(con=="True"){
							$($("#report span")[i]).toggleClass("badge-danger");
						} else {
							$($("#report span")[i]).toggleClass("badge-secondary");
						}
					} else {
						$("#result").html($("#result").text()+con+" ");
					}
				}
			});
		}
		function move() {
			setTimeout(submit, 2500)
			var elem = document.getElementById("myBar"); 
			var width = 1;
			var id = setInterval(frame, 10);
			function frame() {
				if (width >= 100) {
					clearInterval(id);
				} else {
					width++; 
					elem.style.width = width + '%'; 
				}
			}
		}
		function submit() {
			$("#request form").submit();
		}
	</script>


</body>
</html>