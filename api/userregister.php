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
if (empty($_POST['property_classify'])) {
    $response['success'] = false;
    $response['message'] = "Classify of Property is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['total_bedrooms'])) {
    $response['success'] = false;
    $response['message'] = "Number Of Bedrooms is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['evc_code'])) {
    $response['success'] = false;
    $response['message'] = "EVC Code is Empty";
    print_r(json_encode($response));
    return false;
}
$user_email_id = filter_input(INPUT_POST, 'user_email_id');
$password = filter_input(INPUT_POST, 'password');
$property_classify = filter_input(INPUT_POST, 'property_classify');
$total_bedrooms = filter_input(INPUT_POST, 'total_bedrooms');
$evc_code =filter_input(INPUT_POST, 'evc_code');


$sql = "SELECT * FROM users WHERE user_email_id='$user_email_id'";
$res = $db->rawQuery($sql);
if (count($res) >= 1) {
    $response['success'] = false;
    $response['message'] ="Email Id Already Exists";
    print_r(json_encode($response));
    return false;
}

$sql = "SELECT * FROM evc_codes WHERE evc_code='$evc_code'";
$res = $db->rawQuery($sql);
if (count($res) == 0) {
    $response['success'] = false;
    $response['message'] ="EVC Code Invalid";
    print_r(json_encode($response));
    return false;
}
$wallet = $res[0]['amount'];
$sql = "INSERT INTO users (`user_email_id`,`password`,`property_classify`,`total_bedrooms`,`wallet`)VALUES('$user_email_id','$password','$property_classify','$total_bedrooms',$wallet)";
$db->rawQuery($sql);

$sql = "SELECT * FROM users WHERE user_email_id = '$user_email_id'";
$res = $db->rawQuery($sql);
$response['success'] = true;
$response['message'] = "Registered  Successfully";
$response['data'] = $res;
print_r(json_encode($response));

?>