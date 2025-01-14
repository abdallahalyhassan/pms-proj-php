<?php require_once("../core/function.php"); 
session_start();
$numofproduct=(int)$_POST['number'];
if($numofproduct<0){
    redirect("../cart.php");
}else{
$data=($_SESSION['products']);
$data[$_POST['product']][1]=$numofproduct;
$_SESSION['products']=$data;

//echo $data[$_POST['product']][1];
 redirect("../cart.php");
}