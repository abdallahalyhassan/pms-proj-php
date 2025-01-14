<?php
session_start();
include "../core/function.php";
include "../core/validation.php";
$errors=[];
if(checkreqestMethod("POST")){
    
    foreach($_POST as $key=>$value){
        $$key=samitizeInput($value);
    }
 

    if(!requireval($Title)){
       $errors[]="Title is require";
    }else if(!minval($Title,3)){
        $errors[]="Title must be more than 3";
    }
    //password
    if(!requireval($Price)){
        $errors[]="Price is require";
    }
    
     //email
    if(!requireval($Image)){
        $errors[]="Image is require";
     }


    if(empty($errors)){
    $users_file=fopen("../data/Product.csv","a+");
    fwrite($users_file,"$Title,$Price,$Image\n");
    redirect("../index.php");

    die;
    }else{
    $_SESSION["errors"]=$errors;
    redirect("../AddProduct.php");
    die;
    }

}else{
    echo "not supported method";
}