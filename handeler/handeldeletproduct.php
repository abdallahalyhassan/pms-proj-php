<?php require_once("../core/function.php"); 


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $product = trim($_POST['product']);
    $result = deleteProduct($product);
    if ($result === true) {
        $succses = "Product Deleted successfully.";
    } else {
        $errors = $result;
    }
}
redirect("../DeleteProdact.php");