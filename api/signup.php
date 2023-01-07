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
if (empty($_POST['property_type'])) {
    $response['success'] = false;
    $response['message'] = "Type of Property is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['bedrooms_count'])) {
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
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$property_type = filter_input(INPUT_POST, 'property_type');
$bedrooms_count = filter_input(INPUT_POST, 'bedrooms_count');
$evc_code =filter_input(INPUT_POST, 'evc_code');

$data_to_store = filter_input_array(INPUT_POST);
$db = getDbInstance();
$last_id = $db->insert ('users', $data_to_store);
