<?php require_once("../core/function.php"); 

deletecartproduct($_POST["product"]);
// var_dump($_POST["product"]);
redirect("../cart.php");