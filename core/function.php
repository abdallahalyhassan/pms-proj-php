<?Php

function checkreqestMethod($method){
    if($_SERVER['REQUEST_METHOD']==$method)
    {
        return true;
    }
    return false;
}


function checkpostinput($input){
    if(isset($_POST[$input])){
        return true;

    }
    return false;
}


function samitizeInput($input){
    return trim(htmlspecialchars(htmlentities($input)));

}

function redirect($path){
    header("location:$path");
}

function deletecartproduct($title){
    session_start();

    unset($_SESSION["products"][$title]);
    // var_dump($_SESSION);
    $_SESSION["numofproduct"]-=1;
}


function deleteProduct($product){
    $file = fopen("../data/Product.csv", 'r');
    $lines = [];
    while ($line = fgets($file)) {
        $emplyee = trim($line);
        $row = explode(',', $emplyee);
        if ($row[0] == $product) {
        } else {
            $lines[] = $line;
        }
    }
    fclose($file);

    $file = fopen("../data/Product.csv", 'w');
    foreach ($lines as $line) {
        fwrite($file, $line);
    }

    fclose($file);
    return true;


}