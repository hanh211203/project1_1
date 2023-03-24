<?php
    switch($action){
        case '':
            require_once('model/user/customer/customer_model.php');
            require_once('views/user/customer/main.php');
            ;break;
        case 'create': 
            require_once('views/user/customer/add.php');//Mới chỉ gọi đến giao diện
            ;break;
        case 'store':
            require_once('model/user/customer/customer_model.php');
            header('location: ?controller='.$controller.'&redirect='.$redirect.'');
            ; break;
        case 'edit':
            require_once('model/user/customer/customer_model.php');
            require_once('views/customer/edit.php');
            ;break;
        case 'update':
            require_once('model/user/customer/customer_model.php');
            header('location: ?controller='.$controller.'&redirect='.$redirect.'');
            ; break;  
    }
?>