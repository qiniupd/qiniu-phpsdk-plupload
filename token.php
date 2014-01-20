<?php
	header("Content-type: application/json");
	require_once("qiniu/rs.php");

	$bucket = '<Your Buckete Name>';
	$accessKey = '<Your Buckete Name>';
	$secretKey = '<Your Secret Key>';

	Qiniu_SetKeys($accessKey, $secretKey);
	$putPolicy = new Qiniu_RS_PutPolicy($bucket);
	$upToken = $putPolicy->Token(null);
	$list = array("uptoken"=>$upToken);
	echo json_encode($list);
?>
