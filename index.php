<?php 
$pageTitle = 'accueil ';
include 'includes/header.php';

$i=0; 
?>
 
<div class="row ">
<!-- <div class="col"> -->
<?php foreach($tableau as $key => $product) {?>
         
    <div class="card" style="width: 20rem; height: 40rem; margin: 1.2rem; border: 1px solid opacity 0.8;">
        <img src="<?= $product['pictures']?>" class="card-img-top" alt="beauties" style="max-height: 20rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $product['name']?></h5>
            <p class="card-text"><?= $product['descriptionShort'] ?></p>
            <a href="../list.php" class="btn btn-primary justify-content-center align-items-center">buy this product</a>
        </div>

    </div>
    <?php if (++$i == 3) break ?>
    <?php } ?>
    <!-- </div> -->
    
    <div class="row">
        <a href="list.php" class="btn btn-primary col-6 mx-auto">see all products</a>
    </div>
    </div>
<?php include 'includes/footer.php'?>


