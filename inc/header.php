<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - EraaSoft PMS Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">EraaSoft PMS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <?php if(isset($_SESSION["auth"])):?>
                            <?php if($_SESSION["auth"][2]=="admin"):?>
                                <li class="nav-item"><a class="nav-link" href="AddProduct.php">Add Product</a></li> 
                                <li class="nav-item"><a class="nav-link" href="DeleteProdact.php">Delete Product</a></li>    
                            <?php endif;?>
                        <?php endif;?>    
                    </ul>
                    <form class="d-flex" action="cart.php">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                                Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill"><?php if(isset($_SESSION['numofproduct'])){ echo $_SESSION['numofproduct'];}else{ echo 0;}?></span>
                        </button>
                    </form>
                    <?php if(!isset($_SESSION["auth"])):?>
                        <button class="btn btn-outline-dark" type="submit">
                        <a class="nav-link" href="login.php">Login</a>
                        </button>
                        <button class="btn btn-outline-dark" type="submit">
                        <a class="nav-link" href="regester.php">Regester</a>
                        </button>
                    <?php endif;?>
                    <?php if(isset($_SESSION["auth"])):?>
                        <button class="btn btn-outline-dark" type="submit">
                        <a class="nav-link" href="logout.php">Logout</a>
                        </button>
                    <?php endif;?>
                </div>
            </div>
        </nav>