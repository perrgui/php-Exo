<?php
include 'function.php';

$description= "ces produits de grande qualité conféctionnés a la main par Manon dans le respect de l'environnement et des différents acteurs ";

$tableau = [
    1=>['name' => 'Bonnet en laine',

    'price taxed' =>10,
'description' => $description],

2=>['name' =>'Bonnet en laine bio',

'price taxed' =>14,
'description' => $description],

3=>['name' =>'Bonnet en laine et cachemire',

'price taxed' =>20,
'description' => $description],

4=>['name' =>'Bonnet arc-en-ciel',

'price taxed' =>18,
'description' => $description]
];

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>



      <table>
          
          <tr>
              <th><strong>nom </strong></th>
              <th><strong>prix hors taxes</strong></th>
              <th><strong>prix</strong></th>
              <th><strong>description</strong></th>
          </tr>
        <?php 
        foreach ($tableau as $key => $product) {?>
         <tr>
             <td><?php echo $product['name'];?></td>
             <td><?php echo tva($product['price taxed']);?></td>
             <td <?php if ($product['price taxed']< 16) {?>style ="color:green"<?php } ?>>
             <?= $product['price taxed'] ;?></td>
                 
             <td> <?php echo $product['description']?></td>
         </tr>
      <?php } ?>
     </table>
 </body>
 </html>

 