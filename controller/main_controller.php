<?php
    //Lấy giá trị Controller đang làm việc với Client 
    $controller = $_GET['controller'] ?? '';
    $redirect=$_GET['redirect']??'';
    //Điều khiển controller làm gì 
    $action = $_GET['action'] ?? '';
    //Gọi chức năng cho Client 
    if(!isset($_GET['controller'])) {
        require_once('controller/client/main_client_controller.php');
    }else {
        switch($controller) {
            case 'user' : require_once('controller/user/main_user_controller.php'); break;
            case 'login' : require_once('login/login_controller.php'); break;
        }
    }




//     switch($controller){
//         case '':
//             if(isset($_SESSION['username'])&& isset($_SESSION['password'])){
//                 require_once('views/dashboard.php');
//             }else{
//                 header('location: ?controller=login&action=login');
//             };break;
//         case 'login':require_once('login/login_controller.php');break;
//         case 'admin': 
//             if(isset($_SESSION['username'])&& isset($_SESSION['password'])){
//                 require_once('admin/admin_controller.php');
//             }else{
//                 header('location: ?controller=login&action=login');
//             };break;
//         case 'category':
//             if(isset($_SESSION['username'])&& isset($_SESSION['password'])){
//                 require_once('category/category_controller.php');
//             }else{
//                 header('location: ?controller=login&action=login');
//             };break;
//         case 'product':
//             if(isset($_SESSION['username'])&& isset($_SESSION['password'])){
//                 require_once('product/product_controller.php');
//             }else{
//                 header('location: ?controller=login&action=login');
//             };break;
//         case 'customer':
//             if(isset($_SESSION['username'])&& isset($_SESSION['password'])){
//                 require_once('customer/customer_controller.php');
//             }else{
//                 header('location: ?controller=login&action=login');
//             };break;
//         case 'order':
//             if(isset($_SESSION['username'])&& isset($_SESSION['password'])){
//                 require_once('order/order_controller.php');
//             }else{
//                 header('location: ?controller=login&action=login');
//             };break;
            
//         case 'revenue_statistics':
//             if(isset($_SESSION['username'])&& isset($_SESSION['password'])){
//                 require_once('revenue_statistics/revenue_statistics.php');
//             }else{
//                 header('location: ?controller=login&action=login');
//             };break;
//     }
// ?>