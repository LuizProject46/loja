<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Content-Type, Accept');
header('Content-Type: application/json');


if($_POST[type] == 'send_mail'){

    $name    = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $msg = $_POST['msg'];

    $response = Mail::sendEmail($name,$email,$phone,$msg); 

    echo json_encode($response);
}

if($_POST[type] == 'prod_desc'){
    $res = Products::getDesc($_POST[id]);

    echo json_encode($res);
}

if($_POST[type] == 'prod_del'){
    $res = Products::del($_POST[id],$_POST[image]);

    echo $res;
}


?>