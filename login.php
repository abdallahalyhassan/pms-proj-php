<?php require_once('inc/header.php');?>
 <!-- Header-->
 <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>
        <?php
        if(isset($_SESSION['errors'])):
            foreach($_SESSION['errors'] as $error):?>
        <?php echo $error?>
        <?php endforeach; 
            endif;
            unset($_SESSION["errors"]);
        ?>

        
<form class="border p-3" action="handeler/handelLogin.php" method="POST">
   
    <div class="form-group p-2 my-1">
        <label for="email">Email</label>
        <input type="email" name="email" class="from-control" id="email">
    </div>
    <div class="form-group p-2 my-1">
        <label for="password">password</label>
        <input type="password" name="password" class="from-control" id="password">
    </div>
    <div class="form-group p-2 my-1">
        <input type="submit" value="Login" class="from-control" >
    </div>
    <p class="mt-3">Don't have an account? <a href="regester.php">Register here</a></p>
</form>

















<?php require_once ('inc/footer.php'); ?>