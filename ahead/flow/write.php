<?php
http_response_code(500);

$name = explode('.', $_FILES['fcsToUploaded']['name'][0])[0];
// var_dump($_POST);

$myfile = fopen("samples/$_POST[sID]_$name.out", "w") or die("Unable to open file!");

$txt = "Sample ID: $_POST[sID]
Test Date: $_POST[tDate]
Prediction Report Date: ".date("Y-m-d")."
Flow Cytometer: $_POST[cytometer]
Specimen Type: $_POST[specimen]
Test Panel: $_POST[testPanel]";
// Low Event Count: False\n
// Hemodilution: False\n
// Prediction Result: Abnormal\n
// Probability: 99.9%\n

fwrite($myfile, $txt);
fclose($myfile);

$fileCount = count($_FILES['fcsToUploaded']['name']);

for ($i = 0; $i < $fileCount; $i++) {

	if ($_FILES["fcsToUploaded"]["error"][$i] === UPLOAD_ERR_OK) {
		echo "File name: " . $_FILES["fcsToUploaded"]["name"][$i]."<br/>";
		echo "File type: " . $_FILES["fcsToUploaded"]["type"][$i]."<br/>";
		echo "File size: " . ($_FILES["fcsToUploaded"]["size"][$i] / 1024 / 1024)." Mb<br />";
		echo "Cache name: " . $_FILES["fcsToUploaded"]["tmp_name"][$i];

		if (!file_exists("samples/fcs/$_POST[sID]_$name/")) {
			mkdir("samples/fcs/$_POST[sID]_$name/");
		}
		if (!file_exists("samples/fcs/$_POST[sID]_$name/".$_FILES["fcsToUploaded"]["name"][$i])) {
			move_uploaded_file($_FILES["fcsToUploaded"]["tmp_name"][$i],"samples/fcs/$_POST[sID]_$name/".$_FILES["fcsToUploaded"]["name"][$i]);
		} else {
			echo "Error: File $_FILES[fcsToUploaded][name][$i] exists";
		}
	} else {
		echo "Error: ".$_FILES["fcsToUploaded"]["error"][$i];
	}

}
http_response_code(200);
header("location: ./");
?>
