<!DOCTYPE HTML>
<html>
<head>
	<title>Ahead</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="assets/css/main.css">
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

// $( function() {
// 	var response = <?php 
// 	$db->query("SELECT * FROM model");
// 	$response = array();
// 	while($r = $db->fetch_array()) {
// 		$response[] = strtoupper($r['name']);
// 	}
// 	echo json_encode($response);
// 	?>;
// 	$(".model").autocomplete({source: response});
// });

function delete_p(pid) {
	var response = confirm("確定刪除？");
	if (response==true) {
		$.post('delete.php', {'pid':pid}, function(data, status) {
			if(status=="success"){
				alert("pid="+pid+"已經刪除");
				location.reload();
			} else if(status=="error" || status=="notmodified") {
				alert("Error occurred. ");
			}
		});
	}
}

function add_u(pid) {
	var name = prompt("請輸入姓名：");
	if (name!=null) {
		$.post('add.php', {'pid':pid,'name':name}, function(data,status) {
			if (status=="success") {
				console.log(data);
				location.reload();
			} else if(status=="error" || status=="notmodified") {
				alert("Error occurred. ");
			}
		});
	}
}

function done_u(pid) {
	var name = prompt("請輸入姓名：");
	if (name!=null) {
		$.post('done_part.php', {'pid':pid,'name':name}, function(data,status) {
			if (status=="success") {
				console.log(data);
				location.reload();
			} else if(status=="error" || status=="notmodified") {
				alert("Error occurred. ");
			}
		});
	}

}


</script>

<body onload="ShowTime()">

	<?php include("navbar.php"); ?>

	<div class="container">

		<div class="jumbotron" style="margin-top: 2em;">
			<form method="post" action="insertion.php">
				<div class="form-row">
					<div class="form-group col">
						<label for="in-req-organ">Request Organization</label>
						<input type="text" class="form-control" name="in-req-organ">
					</div>
					<div class="form-group col">
						<label for="in-flow-cyto">Flow Cytometer</label>
						<div id="in-flow-cyto" class="form-inline">
							<div class="form-check form-check-inline">
								<input type="radio" id="flow-cyto1" name="flow-cyto" class="form-check-input" value="BD®Calibur">
								<label class="form-check-label" for="flow-cyto1">BD®Calibur</label>
							</div>
							<div class="form-check form-check-inline">
								<input type="radio" id="flow-cyto2" name="flow-cyto" class="form-check-input" value="BD®Calibur-II">
								<label class="form-check-label" for="flow-cyto2">BD®Calibur-II</label>
							</div>
							<div class="form-check form-check-inline">
								<input type="radio" id="flow-cyto3" name="flow-cyto" class="form-check-input" value="Others">
								<label class="form-check-label" for="flow-cyto3">Others</label>
							</div>
							<div style="width: 10%;">
								<input type="text" class="form-control" id="flow-cyto-oth" name="flow-cyto-oth" disabled>
							</div>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col">
						<label for="inputSC">S/C</label>
						
						<input type="text" class="form-control" id="inputSC" name="SC">
					</div>
					<div class="form-group col">
						<label for="inputModel">型號</label>
						<input type="text" class="form-control model" id="inputModel" name="model">

					</div>
				</div>
				<div class="form-row">
					<div class="form-group col">

						<label for="inputContent">工作內容</label>
						<select class="form-control c-list" id="inputContent" name="c1">
							<option class="placeholder" value=" "></option>
							
						</select>
					</div>
					
				</div>
				<div class="form-row">
					<div class="form-group col">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="validatedCustomFile" required>
							<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
							<div class="invalid-feedback">Example invalid custom file feedback</div>
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-success">送出</button>
				<div style="display: inline; margin-left:2em;">現在時間：<div id="showbox" style="display: inline"></div></div>
			</form>
		</div>



		<div class="space"></div>


<nav>
	<div class="nav nav-tabs" id="nav-tab" role="tablist">
		<a class="nav-item nav-link active" id="incomplete-tab" data-toggle="tab" href="#incomplete" role="tab" aria-controls="incomplete" aria-selected="true">未完成</a>
		<a class="nav-item nav-link" id="complete-tab" data-toggle="tab" href="#complete" role="tab" aria-controls="complete" aria-selected="false">完成</a>
	</div>
</nav>


	<div class="tab-content" id="tabContent">
		<div class="row tab-pane fade show active" id="incomplete" role="tabpanel">
			<div class="col-md-12">
				<table id="incomplete-table" class="table table-striped table-hover">
					<thead>
						<tr>
							<?php 
							// $col = array("pID","機台","S/C","型號","工作內容","開始時間","人員","","修改","完成");
							// for($j=0;$j<mysqli_num_fields($data)+3;$j++){
							// 	echo "<td>".$col[$j]."</td>";
							// }
							?>
						</tr>
					</thead>
					<tbody>
					<?php
					// for($i=0;$i<mysqli_num_rows($data);$i++){
					// 	$rs=mysqli_fetch_row($data);
					// 	echo "<tr id='proccess$rs[0]'>";
					// 	for($j=0;$j<count($rs);$j++){ 
					// 		echo "<td>".strtoupper($rs[$j])."</td>";
					// 	}
						?>
						<td>
							<i class="func fas fa-user-plus plus" data-toggle="modal" data-target="#addModal" style="margin-right: 5pt;"></i>
							<i class="func fas fa-user-check check" data-toggle="modal" data-target="#donePartModal"></i>
						</td>
						<td>
							<i class="func fas fa-edit edit" data-toggle="modal" data-target="#editModal"></i>
							<i class="func fas fa-trash-alt edit" onclick="delete_p()"></i>
						</td>
						<td>
							<i class="func fas fa-check check" data-toggle="modal" data-target="#doneModal"></i>
						</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="row tab-pane fade" id="complete" role="tabpanel">
			<div class="col-md-12">
				<table id="complete-table" class="table table-striped table-hover">
					<thead>
						<tr>
							<?php 
							$data_c = $db->query("SELECT * FROM complete_user WHERE start_time between CURDATE() and DATE_ADD(CURDATE(),INTERVAL 1 DAY)");
							$col = array("pID","機台","S/C","型號","工作內容","數量","開始時間","結束時間","人員");
							for($j=0;$j<mysqli_num_fields($data_c);$j++){
								echo "<td>".$col[$j]."</td>";
							}
							?>
						</tr>
					</thead>
					<tbody>
					<?php
					for($i=0;$i<mysqli_num_rows($data_c);$i++){
						$rs=mysqli_fetch_row($data_c);
						echo "<tr id='proccess$rs[0]'>";
						for($j=0;$j<count($rs);$j++){ 
							echo "<td>".strtoupper($rs[$j])."</td>";
						}
						?>
					</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div><!-- tabContent -->

	<div class="space"></div>

	<footer id="footer">
		<ul class="copyright">
			<li>&copy; 和松實業股份有限公司. All rights reserved.</li>
			<li>Design: <a href="http://sellylugithub.io/">Chih-Chuan Lu</a></li>
		</ul>
	</footer>

	</div><!-- container -->


	<script type="text/javascript">
		$(document).ready(function ($) {

$("#in-flow-cyto input[type=radio]").change(function() {
	$(this).
});
$("#in-flow-cyto input[type=radio]:checked").val()




$(".c-list").change(function(){
	$(this).children(".placeholder").remove();
	var v = this.value;
	var next = $(this).parent().nextAll().children("select");
	var ind0 = $(this).attr('name');

	var ori = '<option class="placeholder" value=" "></option>';
	$.each(next, function(n) {
		var ind1 = next[n].name;
		$.post('next_c.php', {'value':v,'ind0':ind0,'ind1':ind1}, function(data,status) {
			if (status=="success") {
				next[n].innerHTML = ori+data;
			} else if(status=="error" || status=="notmodified") {
				alert("Error occurred. ");
			}
		});
	});
});

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