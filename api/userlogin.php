<?php

require_once '../config/config.php';
$db = getDbInstance();
$db->connect();


if (empty($_POST['email'])) {
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

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$sql = "SELECT * FROM users WHERE email ='$email' AND password='$password'";
$db = getDbInstance();
$rows = $db->arraybuilder('users','$email');
$num = $db->getValue ("count('$rows')");
if ($num == 1){
    $response['success'] = true;
    $response['message'] = "Logged In Successfully";
    $response['data'] = $users;
    print_r(json_encode($response));
}
else{
    $response['success'] = false;
    $response['message'] = "User Not Found Or Invalid Credentials";
    print_r(json_encode($response));

}
?>