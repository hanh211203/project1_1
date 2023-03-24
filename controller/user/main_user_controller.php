<?php
// Lấy giá trị Controller nào đang làm việc với Client
$controller = $_GET['controller'] ?? '';
// Điều hướng trong admin
$redirect = $_GET['redirect'] ?? '';
// Điều khiển Controller làm gì
$action = $_GET['action'] ?? '';
// Gọi chức năng cho Admin
switch($controller) {
    case 'admin' : 
        if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
            if(isset($_GET['redirect'])) {
                switch($redirect) {
                    case '' : 
                        if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
                            require_once('controller/user/admin/admin_controller.php');
                        }else{
                            header('location: ?controller=login&action=login');
                        }
                        ; break;
                    case 'product' : 
                        if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
                            require_once('controller/user/product/product_controller.php');
                        }else{
                            header('location: ?controller=login&action=login');
                        }
                        ; break;
                    case 'category' : 
                        if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
                            require_once('controller/user/category/category_controller.php');
                        }else{
                            header('location: ?controller=login&action=login');
                        }
                        ; break;    
                    case 'customer' : 
                        if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
                            require_once('controller/user/customer/customer_controller.php');
                        }else{
                            header('location: ?controller=login&action=login');
                        }
                        ; break; 
                        
                         
                }
            }else {
                require_once('views/dashboard.php');
            }


        }else{
            header('location: ?controller=login&action=login');
        }
        ; break;
}
?>