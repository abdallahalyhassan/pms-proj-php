<?php
session_start();
include "../core/function.php";

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}


$data=($_SESSION['products']);

if(!isset($data[$_POST['product']])){
    $_SESSION["numofproduct"]+=1;
}
if(isset($data[$_POST['product']])){
$num=(int)($data[$_POST['product']][1]);
$num+=1;
$data[$_POST['product']][1]=$num;

}else{
$data[$_POST['product']]=[$_POST['price'],1];
}
$_SESSION['products']=$data;


var_dump( $_SESSION['products']);







redirect("../index.php");
