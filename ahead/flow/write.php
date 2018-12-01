<?php
http_response_code(500);
$myfile = fopen("samples/$_POST[sID].out", "w") or die("Unable to open file!");

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

http_response_code(200);
header("location:./#report");
?>