<?php
session_start();
include "../core/function.php";
include "../core/validation.php";
$errors=[];
if(checkreqestMethod("POST")&&checkpostinput("name")){
    
    foreach($_POST as $key=>$value){
        $$key=samitizeInput($value);
    }
 

    if(!requireval($name)){
       $errors[]="name is require";
    }else if(!minval($name,3)){
        $errors[]="name must be more than 3";
    }else if(!maxval($name,25)){
        $errors[]="name must be smaler than 25";
    }
    //password
    if(!requireval($password)){
        $errors[]="password is require";
     }else if(!minval($password,3)){
         $errors[]="password must be more than 3";
     }else if(!maxval($password,25)){
         $errors[]="password must be smaler than 25";
     }
     //confirm password
     if (empty($confirm_password)) {
        $errors[] =  "Please confirm your Password.";
    } elseif ($password !== $confirm_password) {
        $errors[] =  "Passwords do not match.";
    }

     //email
    if(!requireval($email)){
        $errors[]="email is require";
     }else if(!emailval($email)){
         $errors[]="please valid inter email";
     }
     if (empty($type) || !in_array($type, ['admin', 'user'])) {
        $errors[] =  "Invalid user type.";
    }
    if(empty($errors)){
    $users_file=fopen("../data/users.csv","a+");
    $hashPass = password_hash($password, PASSWORD_DEFAULT);
    fwrite($users_file,"$name,$email,$hashPass,$type\n");;

    $_SESSION["auth"]=[$name,$email,$type];

    redirect("../index.php");

    die;
    }else{
    $_SESSION["errors"]=$errors;
    redirect("../regester.php");
    die;
    }

}else{
    echo "not supported method";
}