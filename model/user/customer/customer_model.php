<?php
function index(){
    include_once('config/connect.php');
    $sql = "SELECT * FROM customer";
    $record = mysqli_query($connect, $sql);
    include_once('config/close_connect.php');
    return $record;
}
function store(){
    include_once('config/connect.php');
    $cus_first_name = $_POST['cus_first_name'];
    $cus_last_name = $_POST['cus_last_name'];
    $cus_phone = $_POST['cus_phone'];
    $cus_email = $_POST['cus_email'];
    $cus_address = $_POST['cus_address']; 
    $sql = "INSERT INTO admin (cus_first_name, cus_last_name, cus_phone, cus_email, cus_address)
            VALUES ('$cus_first_name','$cus_last_name','$cus_phone','$cus_email','$cus_address')";
    $record = mysqli_query($connect,$sql);
    include_once('config/close_connect.php');
    return $record;
}
function edit(){
    $cus_id = $_GET['cus_id'];
    include_once('config/connect.php');
    $sql = "SELECT*FROM admin WHERE cus_id=$cus_id";
    $record = mysqli_query($connect, $sql);
    include_once('config/close_connect.php');
    return $record;
}
function update(){
    $cus_id = $_GET['cus_id'];
    include_once('config/connect.php');
    $cus_first_name = $_POST['cus_first_name'];
    $cus_last_name = $_POST['cus_last_name'];
    $cus_phone = $_POST['cus_phone'];
    $cus_email = $_POST['cus_email'];
    $cus_address = $_POST['cus_address'];
    $sql = "UPDATE admin SET cus_first_name=$cus_first_name, cus_last_name=$cus_last_name,cus_phone=$cus_phone,cus_email=$cus_email,cus_address=$cus_address
            WHERE cus_id=$cus_id";
    $record = mysqli_query($connect,$sql);
    include_once('config/close_connect.php');
    return $record;
}
/*Trả về index cho controller */
switch($action){
    case '': $record = index(); break;
    case 'store': store(); break;
    case 'edit': $record = edit(); break;
    case 'update':update();break;
}
?>