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
	</style>
</head>
<body class="is-preload">

	<!-- Header -->
	<div id="header">

		<div class="top">
			<!-- Logo -->
			<div id="logo">
				<a href="./">
					<span class="image avatar48"><img src="../images/icon/logo.png" alt="AHEAD" /></span>
					<h1 id="title" style="padding-top: 15px">AHEAD-Flow</h1>
					<p style="margin-top: 1.5em">Residual Leukemia Cell Detection Model</p>
				</a>
			</div>
			<!-- Nav -->
			<nav id="nav">
				<ul>
				</ul>
			</nav>

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
				<form method="post" action="">
					<div class="row">
						<div class="col">
							<label for="org">Request Organization</label>
							<input type="text" class="form-control" name="org" placeholder="">
						</div>
						<div class="col">
							<label for="sID">Sample ID</label>
							<input type="text" class="form-control" name="sID" placeholder="0000" disabled>
						</div>
						<div class="col">
							<label for="tDate">Test Date</label>
							<input type="text" id="datepicker" class="form-control" name="tDate" placeholder="2018/08/30">
						</div>
					</div>
					<div class="row">
						<div class="col">
							<label for="cytometer">Flow Cytometer</label>
							<select>
								<option value="BD®Calibur">BD®Calibur</option>
								<option value="BD®Calibur-II">BD®Calibur-II</option>
								<option value="other">Other</option>
							</select>
						</div>
						<div class="col">
							<label for="specimen">Specimen Type</label>
							<select id="specimen">
								<option value="Bone Marrow">Bone Marrow</option>
								<option value="Peripheral Blood">Peripheral Blood</option>
								<option value="Lymph node">Lymph node</option>
								<option value="CSF">CSF</option>
								<option value="Tissue">Tissue</option>
								<option value="other">Other</option>
							</select>
						</div>
						<div class="col" style="text-align: left;">
							<label for="testPanel">Test Panel(Select or Upload)</label>
							<select id="testPanel" style="display:inline; position: inherit;width: 8em;">
								<option value="AML">AML</option>
								<option value="other">Other</option>
							</select>
							<input type="file" name="panelToUploaded" id="panelToUploaded" style="position: relative;" hidden>
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
						<div class="col" style="text-align: left;">
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
						<div class="col" style="text-align: left;">
							<label for="fcsToUploaded">Upload fcs files</label>
							<input type="file" name="fcsToUploaded" id="fcsToUploaded" multiple>
						</div>
					</div>
					<div class="row">
						<div class="col" style="text-align: left;">
							<label for="remark">Remark</label>
							<textarea type="text" name="remark" id="remark" rows="2" cols="80"></textarea>
						</div>
					</div>
					<button type="submit" class="btn btn-success" style="float: right; font-size: 95%">Submit Request</button>
				</form>
			</div>
		</section>

		<section id="report" class="two">
			<header>
				<h3>Prediction Result</h3>
			</header>
			<div class="container" style="font-size: 80%">
				<form method="post" action="">
					<div class="row">
						<div class="col">
							<label for="sID">Sample ID</label>
							<input type="text" class="form-control" name="sID" value="00001" disabled>
						</div>
						<div class="col">
							<label for="tDate">Test Date</label>
							<input type="text" class="form-control" name="tDate" value="2018/08/30" disabled>
						</div>
						<div class="col">
							<label for="rDate">Prediction Report Date</label>
							<input type="text" class="form-control" name="rDate" value="2018/09/10" disabled>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<label for="cytometer">Flow Cytometer</label>
							<input type="text" class="form-control" name="cytometer" value="BD®Calibur" disabled>
						</div>
						<div class="col">
							<label for="specimen">Specimen Type</label>
							<input type="text" class="form-control" name="specimen" value="Bone Marrow" disabled>
						</div>
						<div class="col">
							<label for="testPanel">Test Panel</label>
							<input type="text" class="form-control" name="testPanel" value="AML" disabled>
						</div>
						<div class="col">
							<label for="low">Low Event count Flag</label>
							<h3 style="text-align: left;"><span name="low" class="badge badge-secondary">False</span></h3>
						</div>
						<div class="col">
							<label for="hemodilution">Hemodilution Flag</label>
							<h3 style="text-align: left;"><span name="hemodilution" class="badge badge-secondary">False</span></h3>
						</div>
					</div>
					<div class="row" style="margin-top: .75em">
						<div class="col">
							<h3 style="display: inline; font-weight: 600" >Prediction Result &amp; Probability:&emsp;</h3>
							<em><h3 id="result" style="display: inline;"></h3></em>
						</div>
					</div>
					<button type="submit" class="btn btn-success" style="float: right; font-size: 95%">Export your report</button>
				</form>


				<div class="row" style="margin-top: 2em">
					<div class="col-6">
						<img src="images/result_3d.png" style="width: 100%;">
					</div>
					<div class="col-6">
						<form method="post" action="">
							<div class="row">
								<div class="col">
									<label for="">Select Tube and</label>
									<select>
										<option>1</option>
										<option>2</option>
										<option>3</option>
									</select>
								</div>
								<div class="col">
									<label for="xAX">X-axis</label>
									<select class="form-control" name="xAX">
										<option>aaaa</option>
										<option>bbbb</option>
										<option>cccc</option>
									</select>
								</div>
								<div class="col">
									<label for="yAX">Y-axis</label>
									<select class="form-control" name="yAX">
										<option>aaaa</option>
										<option>bbbb</option>
										<option>cccc</option>
									</select>
								</div>
								<div class="col">
									<label for="zAX">Z-axis</label>
									<select class="form-control" name="zAX">
										<option>aaaa</option>
										<option>bbbb</option>
										<option>cccc</option>
									</select>
								</div>
							</div>
						</form>
						<div style="margin-top: 2em;">
							<img src="images/result_tube.png" style="width: 30%; display: inline;">
							<img src="images/result_tube.png" style="width: 30%; display: inline;">
							<img src="images/result_tube.png" style="width: 30%; display: inline;">
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
			<li>&copy; <u><b>A</b></u>i-assisted <u><b>HE</b></u>matologic <u><b>A</b></u>nalytic and <u><b>D</b></u>ecision Support (AHEAD). All rights reserved.</li><li>Design adapted from <a href="http://html5up.net">HTML5 UP</a></li>
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
		foreach (glob('samples/*') as $filename) {
		    $p = pathinfo($filename);
		    $out[] = $p['filename'];
		}
		echo json_encode($out); ?>;
		for(var i=0; i<files.length; i++) {
			$("#nav ul").append('<li><a class="report scrolly" href="#report"><span class="icon fa-user">'+files[i]+'</span></a></li>');
		}
		$("#request [name*=sID]").attr("placeholder", ("0000" + (Number(files[files.length-1])+1)).slice(-4));


		$( function() {
			$( "#datepicker" ).datepicker();
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
		
		$(".report").click(function() {
			$("nav ul li a").removeClass("active");
			$(this).toggleClass("active");
			var sID = $(this).text();
			$.get("samples/"+sID, function(data) {
				console.log(data);
				$("#result").html("");
				data = data.split("\n")
				for(var i=0; i<data.length; i++) {
					var con = data[i].split(": ")[1].trim();
					if(i<6) {
						$("#report input")[i].value = con;
					} else if(i<8) {
						$($("#report span")[i-6]).html(con);
						$($("#report span")[i-6]).removeClass("badge-danger badge-secondary")
						if(con=="True"){
							$($("#report span")[i-6]).toggleClass("badge-danger");
						} else {
							$($("#report span")[i-6]).toggleClass("badge-secondary");
						}
					} else {
						$("#result").html($("#result").text()+con+" ");
					}
				}
			});
		});
	</script>


</body>
</html>