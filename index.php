<?php 
include 'includes/header.php';

$i=0; 
?>



<?php foreach($tableau as $key => $product) {?>
         
    <div class="card " style="width: 20rem; height: 40rem; margin: 1.2rem; border: 1px solid opacity 0.8;">
        <img src="<?= $product['pictures']?>" class="card-img-top" alt="beauties" style="max-height 20rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $product['name']?></h5>
            <p class="card-text"><?= $product['descriptionShort'] ?></p>
            <a href="list.php" class="btn btn-primary">details of the product</a>
        </div>
    </div>
    <?php if (++$i == 3) break ?>
    <?php } ?>
<?php include 'includes/footer.php'?>


