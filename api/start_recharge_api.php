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


if (empty($_POST['user_id'])) {
    $response['success'] = false;
    $response['message'] = "User Id is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['evc_code'])) {
    $response['success'] = false;
    $response['message'] = "Evc Code is Empty";
    print_r(json_encode($response));
    return false;
}

$user_id = $_POST['user_id'];
$evc_code = $_POST['evc_code'];
$sql = "SELECT * FROM evc_codes WHERE evc_code ='$evc_code'";
$res = $db->rawQuery($sql);
if (count($res)  == 1){
    $amount=$res[0]['amount'];
    $sql = "UPDATE users SET wallet=wallet + $amount WHERE id=" . $user_id;
    $db->rawQuery($sql);
    $sql = "SELECT * FROM users WHERE id=" . $user_id;
    $res = $db->rawQuery($sql);
    $response['success'] = true;
    $response['message'] = "Wallet Recharged Successfully";
    $response['data'] = $res;
    print_r(json_encode($response));
}
else{
    $response['success'] = false;
    $response['message'] = "EVC Code Not Found";
    print_r(json_encode($response));

}
?>