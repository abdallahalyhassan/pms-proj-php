<?php
session_start();
include "../core/function.php";
include "../core/validation.php";
$errors=[];

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    foreach($_POST as $key=>$value){
        $$key=samitizeInput($value);
    }
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
     //email
     if(!requireval($email)){
        $errors[]="email is require";
     }else if(!emailval($email)){
        $errors[]="please valid inter email";
     }

     //password
     if(!requireval($password)){
        $errors[]="password is require";
     }else if(!minval($password,3)){
         $errors[]="password must be more than 3";
     }else if(!maxval($password,25)){
         $errors[]="password must be smaler than 25";
     }

    
    if (empty($errors)) {
        $file = fopen("../data/users.csv", 'r');
        while ($user = fgets($file)) {
            $user = trim($user);
            $row = explode(',', $user);
             
            if ($row[1] == $email &&password_verify($password,$row[2])) {
                $_SESSION['auth'] = [
                $row[0],
                $row[1],
                $row[3]
                ];
                echo"hallo";
                fclose($file);
                redirect("../index.php");
                unset($_SESSION['errors']) ;
                
            }else{
                $_SESSION['errors'] = ["Invalid email or password."];

            }
        }
        fclose($file);
        redirect("../login.php");
       
        
    }else{
    $_SESSION["errors"]=$errors;
    redirect("../login.php");
    die;
    }
}







