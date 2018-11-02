<!DOCTYPE HTML>
<html>
<head>
	<title>Flow | AHEAD</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="Description" content="We develop patient-centered AI algorithms to provide clinical decision support for physicians in treating hematologic diseases by conducting efficient and comprehensive disease status assessment throughout patient treatment course, reducing interpretation idiosyncrasies and alleviate manpower shortage gap for clinical demands.">
	<meta name="KeyWords" content="ahead,hematologic analytic,leukemia,prognosis,biic,nthu,tai-cheng,sctc,ntuh,血癌,智能化,血液診斷,預後預測,臺大醫院,清大">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/open-iconic-bootstrap.css">
</head>

<script type="text/javascript">
function ShowTime(){
	var now = new Date();
	var year= now.getFullYear();
	var mon = now.getMonth()+1;
	if (mon<10) { mon = '0'+mon;}
	var date= now.getDate();
	if (date<10) { date = '0'+date;}
	var str = year+'-'+mon+'-'+date+' '+now.toTimeString().split(" ")[0];
	$('#showbox').text(str);
	setTimeout('ShowTime()',1000);
}
</script>

<body onload="ShowTime()">

	<?php include("navbar.php"); ?>

	<div class="container">

		<div id="sidebar">
			ahi
		</div>

		<div id="content">
			<div class="jumbotron" style="margin-top: 2em; padding: 2rem 1rem;">
				<form method="post" action="">
					<div class="form-row">
						<div class="form-group col">
							<label for="inputID">Sample ID</label>
							<input type="text" class="form-control" name="inputID" placeholder="00001" disabled>
						</div>
						<div class="form-group col">
							<label for="tDate">Test Date</label>
							<input type="text" class="form-control" name="tDate" placeholder="2018/08/30" disabled>
						</div>
						<div class="form-group col">
							<label for="rDate">Prediction Report Date</label>
							<input type="text" class="form-control" name="rDate" placeholder="2018/09/10" disabled>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label for="specimen">Specimen type</label>
							<input type="text" class="form-control" name="specimen" placeholder="Bone Marrow" disabled>
						</div>
						<div class="form-group col">
							<label for="testPanel">Test Panel</label>
							<input type="text" class="form-control" name="testPanel" placeholder="AML" disabled>
						</div>
						<div class="form-group col">
							<label for="low">Low Event count Flag</label>
							<h3><span class="badge badge-danger">True</span></h3>
						</div>
						<div class="form-group col">
							<label for="hemodilution">Hemodilution Flag</label>
							<h3><span class="badge badge-secondary">False</span></h3>
						</div>
					</div>
					<div class="form-row">
						<div class="col">
							<h4 style="display: inline;"><b>Prediction Result / Probability:&emsp;</b></h4>
							<h4 style="display: inline;"><em>ABNORMAL; 83.6%</em></h4>
						</div>
						<div style="padding-right: 5px">
							<button type="submit" class="btn btn-success">Export your report</button>
						</div>
					</div>
					
					
				</form>
			</div>



			<!-- <div class="space"></div> -->

			<div class="row" >
				<div class="col-md-5">
					<img src="images/result_3d.png" style="width: 100%;">
				</div>
				<div class="col-md-7" style="text-align: center;">
					<h4>Select Tube to Plot</h4>
					<form method="post" action="">
						<div class="form-row">
							<div class="form-group col">
								<label for="xAX">X-axis</label>
								<select class="form-control" name="xAX">
									<option></option>
								</select>
							</div>
							<div class="form-group col">
								<label for="yAX">Y-axis</label>
								<select class="form-control" name="yAX">
									<option></option>
								</select>
							</div>
							<div class="form-group col">
								<label for="zAX">Z-axis</label>
								<select class="form-control" name="zAX">
									<option></option>
								</select>
							</div>
						</div>
					</form>
					<img src="images/result_tube.png" style="width: 50%;">
				</div>
			</div>
		</div><!-- content -->

		<div class="space"></div>

		<footer id="footer">
			<ul class="copyright">
				<li>&copy; Ai-assisted HEmatolgic Analytic and Decision support(AHEAD). All rights reserved.</li>
				<li>Design: <a href="http://sellylugithub.io/">Chih-Chuan Lu</a></li>
			</ul>
		</footer>

	</div><!-- container -->


	<script type="text/javascript">
		$(document).ready(function ($) {

$("#inputContent").change(function() {
	var name = $(this).children(":selected").val();
	$.post('select_machine.php', {'name':name}, function(data,status) {
		if (status=="success") {
			// ori = next.html();
			$("#inputMachine").html(data);
		} else if(status=="error" || status=="notmodified") {
			alert("Error occurred. ");
		}
	});

});


			$(".plus").click(function (e) {
				e.preventDefault();
				var parent = $(this).parents('tr')
				var pid = parent.attr('id').substr(8);
				$(".inputPid").attr('value',pid);

				var people = parent.children()[6].innerText.split(',');
				for (p in people) {
					$("#addName option:contains("+people[p]+")").prop("disabled",true);
				}
				
			});

			$('.fa-user-check').each(function() {
				if ($(this).parent('td').prev().text().split(',').length ===1) {
					$(this).prop('disabled',true);
					$(this).css('background-color','grey');
					$(this).css('cursor','not-allowed');
				}
			});
			$('.fa-user-check').prop('hidden',false);

			$(".check").click(function (e) {
				e.preventDefault();
				var parent = $(this).parents('tr')
				var pid = parent.attr('id').substr(8);
				$(".inputPid").attr('value',pid);

				var people = parent.children()[6].innerText.split(',');
				s = "";
				for (p in people) {
					s+="<option>"+people[p]+"</option>";
				}
				$("#doneName").val(people[0]);
				$("#doneName").html(s);
			});

			$(".edit").click(function(e) {
				e.preventDefault();
				var pid = $(this).parents('tr').attr('id').substr(8);
				$(".inputPid").attr('value',pid);


			});
		});
	</script>

	<!-- Modal -->
	<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">加入工作</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" action="done_part.php">
					<input class="inputPid" type="number" name="pid" hidden>
					<div class="modal-body">
						<div class="form-row">
							<div class="form-group col">
								<label for="addName">姓名</label>
								<select class="form-control" id="addName" name="name">
									<?php 
									$db->query("SELECT * FROM `user` ORDER BY `name`");
									while($r = $db->fetch_array()) {
										echo "<option>".strtoupper($r['name'])."</option>";
									}
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-secondary" data-dismiss="modal">取消</button>
						<button type="submit" class="btn btn-primary">確定並儲存</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="modal fade" id="donePartModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">人員完成工作</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" action="done_part.php">
					<input class="inputPid" type="number" name="pid" hidden>
					<div class="modal-body">
						<div class="form-row">
							<div class="form-group col">
								<label for="doneName">姓名</label>
								<select class="form-control" id="doneName" name="name">
									<?php 
									$names = $db->query("SELECT * FROM `user` ORDER BY `name`");
									while($r = $db->fetch_array()) {
										echo "<option>".strtoupper($r['name'])."</option>";
									}
									?>
								</select>
							</div>
						</div>
						<!-- <div class="form-row">
							<div class="form-group col">
								<label for="inputNumber">完成數量：</label>
								<input type="number" min="0" value="0" class="form-control" id="inputNumber" name="number">
							</div>
						</div> -->
					</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-secondary" data-dismiss="modal">取消</button>
						<button type="submit" class="btn btn-primary">確定並儲存</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">修改工作</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" action="edit.php">
					<input class="inputPid" type="number" name="pid" hidden>
					<div class="modal-body">

			<div class="form-row">
				<div class="form-group col">
					<label for="inputSC">S/C</label>
					
					<input type="text" class="form-control" id="inputSC" name="SC">
				</div>
				<div class="form-group col">
					<label for="editModel">型號</label>
					<input type="text" class="form-control model" id="editModel" name="model">

				</div>
			</div>
			<div class="form-row">
				<div class="form-group col">
					<label for="editMachine">機台</label>
					<select class="form-control" id="editMachine" name="machine">
						<?php 
						$db->query("SELECT * FROM machine");
						while($r = $db->fetch_array()) {
							echo "<option>".strtoupper($r['name'])."</option>";
						}
						?>
					</select>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col">
					<label for="editContent">工作內容</label>

					<select class="form-control" id="editContent" name="content">
						<?php 
						$db->query("SELECT * FROM content");
						while($r = $db->fetch_array()) {
							echo "<option>".strtoupper($r['name'])."</option>";
						}
						?>
					</select>


				</div>
			</div>

					
						<div class="form-row">
							<div class="form-group col">
								<label for="editName">姓名</label>
								<select class="form-control" id="editName" name="name">
									<?php 
									$db->query("SELECT * FROM `user` ORDER BY `name`");
									while($r = $db->fetch_array()) {
										echo "<option>".strtoupper($r['name'])."</option>";
									}
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-secondary" data-dismiss="modal">取消</button>
						<button type="submit" class="btn btn-primary">確定並儲存</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="modal fade" id="doneModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">完成工作</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" action="done.php">
					<input class="inputPid" type="number" name="pid" hidden>
					<div class="modal-body">
						<div>
							<label for="inputNumber">完成數量：</label>
							<input type="number" min="0" value="0" class="form-control" id="inputNumber" name="number">
						</div>
					</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-secondary" data-dismiss="modal">取消</button>
						<button type="submit" class="btn btn-primary">確定並儲存</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Scripts -->
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

</body>
</html>