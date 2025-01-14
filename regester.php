<?php require_once('inc/header.php'); ?>
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
<form class="border p-3" action="handeler/handelRegester.php" method="post">
    <div class="form-group p-2 my-1">
        <label for="name">Name</label>
        <input type="text" name="name" class="from-control" id="name">
    </div>
    <div class="form-group p-2 my-1">
        <label for="email">Email</label>
        <input type="email" name="email" class="from-control" id="email">
    </div>
    <div class="form-group p-2 my-1">
        <label for="password">password</label>
        <input type="password" name="password" class="from-control" id="password">
    </div>
    <div class="form-group p-2 my-1">
        <label for="confirm_password">confirm password</label>
        <input type="password" name="confirm_password" class="from-control" id="confirm_password">
    </div>
   
    <div class="form-group p-2 my-1">
            <label for="type" class="form-label">User Type</label>
            <select class="form-control" id="type" name="type">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
     </div>
    
     <div class="form-group p-2 my-1">
        <input type="submit" value="Register" class="from-control" >
    </div>
    <p class="mt-3"> Have an account? <a href="login.php">login here</a></p>
</form>











<?php require_once ('inc/footer.php'); ?>