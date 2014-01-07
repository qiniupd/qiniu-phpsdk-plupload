<?php
header("Content-type: application/json");
require_once("qiniu/rs.php");

$bucket = 'qiniu-plupload';
$accessKey = '0MLvWPnyya1WtPnXFy9KLyGHyFPNdZceomLVk0c9';
$secretKey = 'o5itRgrXxoD6XQ5wDWKQ7h--eWvWyQVKcsIURuEV';

Qiniu_SetKeys($accessKey, $secretKey);
$putPolicy = new Qiniu_RS_PutPolicy($bucket);
$upToken = $putPolicy->Token(null);
$list = array("uptoken"=>$upToken);
echo json_encode($list);
?>
