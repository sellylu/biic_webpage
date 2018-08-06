<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="Description" content="Behavioral Informatics & Interaction Computation Lab(BIIC)">
	<meta name="KeyWords" content="biic,nthu,ee,chih-chun lee,bsp,emotion,清大電機,人類行為訊息,互動計算,李祈均">
	<title>BIIC Lab</title>

	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/research_slide.css" />
	<link rel="stylesheet" href="assets/css/bootstrap_modalonly.min.css" />

	<style type="text/css">
		.grid {
			width: 40%;
			display: inline-grid;
			margin: 1em;
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
					<div class="slideshow-container image featured">
						<div class="mySlides slide-fade">
							<img src="./images/proj_slides/img1.PNG">
						</div>
						<div class="mySlides slide-fade">
							<img src="./images/proj_slides/img2.PNG">
						</div>
						<div class="mySlides slide-fade">
							<img src="./images/proj_slides/img3.PNG">
						</div>
						<div class="mySlides slide-fade">
							<img src="./images/proj_slides/img4.PNG">
						</div>

						<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="next" onclick="plusSlides(1)">&#10095;</a>
					</div>
					<br>
					<div style="text-align:center">
						<?php
						for($i=1; $i<=4; $i++) {
							echo "<span class=\"dot\" onclick=\"currentSlide(".$i.")\"></span>";
						}
						?>
					</div>


					<!-- <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a> -->
					<header>
						<h2>Research</h2>
						<p>Download the brief introduction <a href="./research_intro.pdf" target="_blank"><strong style="font-weight: 900;">here</strong></a>.</p>
					</header>
					<section id="special-section">
						<header>
							<h3>Special Section</h3>
						</header>
						<ul class="org">
							<li><a href="#special-section" data-toggle="modal" data-target="#ai-flow-modal">AI for Leukemia Diagnosis</a></li>
							<li><a href="http://nnime.ee.nthu.edu.tw/" target="_blank">NTHU-NTUA Chinese Interactive Emotion Database (NNIME)</a></li>
						</ul>
					</section>

					<section>
						<header>
							<h3>Human-centered Behavioral Signal Processing</h3>
						</header>
						<p>Imagine humans as complex dynamical systems: systems that are characterized by multiple interacting layers of hidden states (e.g., internal processes involving functions of cognition, perception, production, emotion, and social interaction) producing measurable multimodal behavior signals (e.g., body gestures, facial expressions, physiology, and speech). This abstraction of humans with a signals and systems framework naturally brings a synergy between engineering and behavioral sciences. Behavioral signal processing (BSP) offers a new frontier of interdisciplinary research between these communities. The core research in BSP is to mathematically model human behaviors with observational data, i.e., use computational methods grounded in statistics, signal processing, and machine learning to provide quantitative evidence that characterizes and tracks human internal states. The tangible outcome of BSP, i.e., behavioral analytics, offers new quantitative methods for enhancing the capabilities of domain experts in facilitating better decision making. The relevant application domains are diverse, ranging from behavior sciences, mental health, education, security, neuroscience, and personalized human-machine interfaces to user-centric commercial applications.</p>
						<p>The challenges of BSP lie in the complexities of modeling heterogeneous human behaviors. Sources of variability in human behaviors originate from the differences in mechanisms of information encoding (behavior production) and decoding (behavior perception). An additional layer of complexity exists because human behaviors occur largely during interactions with the environment and agents therein. This interplay, which causes a coupling effect between humans’ behaviors, is the essence of interaction dynamics that has been at the core of human communication studies. Further challenges lie in the contextualization of such research in a meaningful and domain-aware manner. This involves translating the knowledge into a range of domains (e.g., the arts, education, and healthcare.</p>
						<p>These challenges represent a multitude of exciting research opportunities in signals and systems. This includes research in designing and instrumenting behavior measurement techniques in ecologically-meaningful ways, developing novel signal processing techniques for capturing objective behavior information from noisy observational data (i.e., feature extraction from raw recording data), creating new algorithms for modeling behavioral interaction dynamics in the presence of confounding inter and intra speaker variability, and contextualizing the entire effort in a domain-aware manner.</p>
					</section>
				</article>

			</div>
		</section>

		<?php include "./footer.php";?>

	</div>

	<!-- Modal -->
	<div class="modal fade" id="ai-flow-modal" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<header class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><a href="">&times;</a></button>
					<h3 class="modal-title"><b>AI for Leukemia Diagnosis</b></h3>
				</header>
				<section class="modal-body">
					<img id="procedure" src="./images/ai4leukemia/ai4leukemia.png">
					<h4><u>Project Description</u></h4>
					<p>With a shared vision in revolutionizing clinical practices by developing and deploying state-of-art AI technology to support efficient and objective medical diagnosis for leukemia. In this joint project, our aim is to develop AI-assisted analytics for acute leukemia diagnosis. An AI-assisted Flow Cytometry (FC) interpretation algorithm was developed using over 10,000 unique FC diagnostic samples collected in the National Taiwan University Hospital – achieving accuracy above 0.9 AUC. This AI-assisted interpretation was further clinically validated against patient’s final survival outcomes. This use of learning high-dimensional FC-data representation through deep-learning neural network fundamentally challenges the current status-quo in traditional observation-based manual diagnostic interpretation procedure done by expert physicians.</p>
					<ol>
						<li>Yu-Fen Wang, Bor-Sheng Ko, Chi-Cheng Li, Jeng-Lin Li, Pei-Fang Weng, Huai-Hsuan Huang, Hsin-An Hou, Hwei-Fang Tien, Chi-Chun Lee, and Jih-Luh Tang, "<i>An Artificial Intelligence Approach for B Lymphoblastic Leukemia Minimal Residual Disease Detection and Clinical Prognosis Prediction Using Flow Cytometry Data</i>" in Annual Meeting of American Society of Hematology, 2017</li>
						<li>Bor-Sheng Ko, Chi-Cheng Li, Yu-Fen Wang, Jeng-Lin Li, Hsin-An Hou, Pei-Fang Weng, Hwei-Fang Tien, Chi-Chun Lee, and Jih-Luh Tang, "<i>An Artificial Intelligence Approach in Classifying Acute Myeloid Leukemia and Myelodysplastic Syndrome for Minimal Residual Disease Detection with Post Induction Prognosis Analysis Using Flow Cytometry</i>" in Annual Meeting of American Society of Hematology, 2017</li>
						<li>Chi-Cheng Li, Bor-Sheng Ko, Yu-Fen Wang, Jeng-Lin Li, Pei-Fang Weng, Hsin-An Hou, Xiu-Wen Liao, Chien-Ting Lin, Jia-Hou Liu, Hsun-I Sun, Hwei-Fang Tien, Chi-Chun Lee, and Jih-Luh Tang, "<i>An Artificial Intelligence Approach for Predicting Allogeneic Hematopoietic Stem Cell Transplantation Outcome By Detecting Pre-Transplant Minimal Residual Disease in Acute Myeloid Leukemia Using Flow Cytometry Data</i>" in Annual Meeting of American Society of Hematology, 2017</li>
					</ol>
					<h4><u>Collaborator</u></h4>
					<div style="text-align: center;">
						<div class="grid">
							<img src="./images/ai4leukemia/kevin.png">
						</div>
						<div class="grid">
							<img src="./images/ai4leukemia/andrea.png">
						</div>
						<div class="grid">
							<p style="text-align: center">
								Kevin Ko 柯博升 M.D. Ph.D.<br>
								台大醫院內科部血液科主治醫師<br>
								台灣骨髓移殖學會秘書長<br>
								kevinkomd@gmail.com
							</p>
						</div>
						<div class="grid">
							<p style="text-align: center">
								Andrea Wang 王毓棻<br>
								專案經理 (Project Manager)<br>
								台灣大學台成幹細胞治療中心<br>
								yufenwang82@gmail.com
							</p>
						</div>
					</section>
				</section>
			</div>
			
		</div>
	</div>


	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/research_slide.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>