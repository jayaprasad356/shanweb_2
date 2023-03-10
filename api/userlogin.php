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


if (empty($_POST['user_email_id'])) {
    $response['success'] = false;
    $response['message'] = "Email Id is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['password'])) {
    $response['success'] = false;
    $response['message'] = "Password is Empty";
    print_r(json_encode($response));
    return false;
}

$user_email_id = $_POST['user_email_id'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE user_email_id ='$user_email_id' AND password='$password'";
$res = $db->rawQuery($sql);
if (count($res) == 1){
    $response['success'] = true;
    $response['message'] = "Logged In Successfully";
    $response['data'] = $res;
    print_r(json_encode($response));
}
else{
    $response['success'] = false;
    $response['message'] = "User Not Found Or Invalid Credentials";
    print_r(json_encode($response));

}
?>