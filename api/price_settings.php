<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");
header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

require_once '../config/config.php';
$db = getDbInstance();
$db->connect();

$sql = "SELECT * FROM `settings`";
$res = $db->rawQuery($sql);
$response['success'] = true;
$response['message'] = "Settings listed Successfully";
$response['data'] = $res;
print_r(json_encode($response));

?>