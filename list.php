<?php
$pageTitle= 'liste des produits';
include 'includes/header.php';
?>

<table class="table">
    
    <tr class="table-primary">
        <th><strong>nom </strong></th>
        <th><strong>prix hors taxes</strong></th>
        <th><strong>prix</strong></th>
        <th><strong>description</strong></th>
    </tr>
    <?php 
        foreach ($tableau as $key => $product) {?>
         <?php echo affichage($product);?>
         <?php } ?>
        </table>
        
        <?php include 'includes/footer.php'; ?>
        
        
        
        