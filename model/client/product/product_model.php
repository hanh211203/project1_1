<?php
switch($redirect){
    function index(){
        $prd_id=$_GET['prd_id'];
        include_once('config/connect.php');
        $cate = mysqli_query($connect,"SELECT * FROM category ORDER BY cat_id ASC");
        $sql = "SELECT * FROM product WHERE prd_id = '$id' ";
        $query = mysqli_query($connect,$sql);
        include_once('config/close_connect.php');
        $arr = array();
        $arr['category'] = $cate;
        $arr['product'] = $query;
        return $arr;
    }
   switch(){

   }

}
?>