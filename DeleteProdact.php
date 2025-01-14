<?php require_once ('inc/header.php'); ?>

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
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php $productFile=fopen("data/Product.csv","r");  ?>
                <?php while($prod = fgets($productFile)):?>
                    <?php $product=explode(",",$prod) ?>    
                <div class="col mb-5">
                        <div class="card h-100">
                        <form action="handeler/handeldeletproduct.php" method="post">    
                        <!-- Product image-->
                            <img class="card-img-top" src="<?= $product[2] ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"name="ProductName" value="<?= $product[0] ?>"><?= $product[0] ?></h5>
                                    <!-- Product price-->
                                    <p name="ProductPrice" value="<?= $product[1] ?>"><?= $product[1] ?></p>
                                </div>
                            </div>
                            <input type="hidden" name="product" value="<?php echo ($product[0]); ?>">
                            <input type="hidden" name="price" value="<?php echo ($product[1]); ?>">
                            <!-- Product actions-->
                           
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button class="btn btn-outline-dark mt-auto"type="submit" ><b>Delete Product</b></div>
                            </div>
                        </form>
                        </div>
                    </div>
                    <?php endwhile;?>                   
                </div>
            </div>
        </section>
<?php require_once ('inc/footer.php'); ?>