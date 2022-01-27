<?php 

function tva(?float $price): ?float{
    $price = round($price /1.2, 2, PHP_ROUND_HALF_UP);
    return  $price;
}



function affichage($product){
    ?>
         <tr>
             <td><?= $product['name'];?></td>
             <td><?= tva($product['price taxed']);?></td>
             <td <?php if ($product['price taxed'] <= 12) { ?>style ="color:green"<?php } ?>>
             <?= $product['price taxed']; ?></td>
                 
             <td> <?= $product['description']; ?></td>
         </tr>
<?php
}
?>

