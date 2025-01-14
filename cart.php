<?php require_once('inc/header.php'); ?>
<?php require_once("core/function.php"); ?>
<?php
$number=1;
$_SESSION["total_price"]=0; 
$total=0;
foreach($_SESSION['products'] as $prodact => $details){
    $total+=$details[0]*$details[1];
}





?>
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Shop in style</h1>
            <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <?php if(isset($_SESSION['products'])): ?>
                    <tbody><?php $x=0;?>
                        
                    <?php foreach($_SESSION['products'] as $prodact => $details): ?>
                       
                        
                        
                        
                        <?php $x=$x+1;?>
                        <tr>
                            <th scope="row"><?php echo $x?></th>
                            <td><?=$prodact?></td>
                            <td>$ <?=$details[0]?></td>
                            <td>
                            <form action="handeler/handelUpdateTotalPrice.php" method="post">
                                <input type="number" value="<?=$details[1] ?>" name="number" onchange="">
                                <input type="hidden" name="product" value="<?php echo($prodact); ?>">
                                <button type="submit" class="btn btn-danger">Update</button>
                                
                            </form>
                                
                            </td>
                            <th scope="col">
                        <?php echo $details[0]*$details[1]?></th>
                        <form action="handeler/handeldeleteproductcart.php" method="post">
                            <td>
                            <input type="hidden" name="product" value="<?php echo($prodact); ?>">
                                <button href="#" type="submit" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        </form>
                        
                        <?php endforeach;?>
                        
                        <tr>
                            <td colspan="2" scope="row" >
                                Tatal Price
                            </td>
                            <td colspan="3">
                                <?php echo $total;?>        
                            </td>
                           <form action="checkout.php">
                            <td colspan="1">
                                <button type="submit" href="" class="btn btn-primary">Checkout</button>
                            </td>
                            </form>
                        </tr>
                    <?php endif;?>
                </table>
            </div>
        </div>
    </div>
</section>
<?php require_once('inc/footer.php'); ?>