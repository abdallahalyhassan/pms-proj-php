<?php require_once('inc/header.php');
$totalprice=0 ;?>
<?php  foreach($_SESSION['products'] as $prodact => $details){
    $totalprice+=$details[0]*$details[1];
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
            <div class="col-4">
                <div class="border p-2">
                    <div class="products">
                        <ul class="list-unstyled">
                        <?php if(isset($_SESSION['products'])): ?>
                            <?php $x=0; ?>
                            <?php foreach($_SESSION['products'] as $prodact => $details): ?>
                            <li class="border p-2 my-1"> <?= $prodact?>-
                                <span class="text-success mx-2 mr-auto bold"><?= $details[0]?> x <?= $details[1]?></span>
                            </li>
                            <?php endforeach; ?>
                            <?php endif ;?>
                          
                    </div>
                    <h3>Total :<?=$totalprice?></h3>
                </div>
            </div>
            <div class="col-8">
                <form action="" class="form border my-2 p-3">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" name="" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Address</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Phone</label>
                            <input type="number" name="" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Notes</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Send" id="" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php require_once('inc/footer.php'); ?>