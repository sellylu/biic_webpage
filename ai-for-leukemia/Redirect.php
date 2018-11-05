<?php
function Redirect($url, $statusCode=300) {
	header('Location: '.$url, true, $statusCode);
	die();
}

?>