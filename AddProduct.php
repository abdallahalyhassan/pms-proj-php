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
        <?php echo $error."<br>"?>
        <?php endforeach; 
            endif;
            unset($_SESSION["errors"]);
        ?>
<form class="border p-3" action="handeler/handelAddProduct.php" method="POST">
    <div class="form-group p-2 my-1">
        <label for="Title">title</label>
        <input type="text" name="Title" class="from-control" id="Title">
    </div>
    <div class="form-group p-2 my-1">
        <label for="Price">Price</label>
        <input type="text" name="Price" class="from-control" id="Price">
    </div>
    <div class="form-group p-2 my-1">
        <label for="Image">Image</label>
        <input type="text" name="Image" class="from-control" id="Image">
    </div>
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        <input type="submit" value="Add Product" class="btn btn-outline-dark mt-auto" >
    </div>
</form>



<?php require_once ('inc/footer.php'); ?>