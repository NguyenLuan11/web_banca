<?php 
include('connectdb.php');
session_start();
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$action = (isset($_GET['action']))?$_GET['action']:'add';
$sl = (isset($_GET['sl']))?$_GET['sl']:1;
// session_destroy();
// die();
// var_dump($action);
// die();
$query = mysqli_query($link,"SELECT * FROM loai_ca WHERE id = $id ");
if($query){
    $product = mysqli_fetch_assoc($query);
}
$item = [
    'id' =>$product['id'],
    'Image' =>$product['Image'],
    'fish_name' =>$product['fish_name'],
    'Color' =>$product['Color'],
    'Price' =>$product['Price'],
    'sl'=>1
];

if($action=='add'){
    if(isset($_SESSION['giohang'][$id])){
        $_SESSION['giohang'][$id]['sl'] +=1;
    
    } else{
        $_SESSION['giohang'][$id] = $item;
    }
}
if($action=='update'){
    $_SESSION['giohang'][$id]['sl'];
}
if($action=='delete'){
    unset($_SESSION['giohang'][$id]);
}
header('location:view_cart.php');
// echo"<pre>";
// print_r($_SESSION['cart']);
?>