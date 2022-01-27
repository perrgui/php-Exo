<?php
include 'function.php';
include 'variables.php';
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
         <?php echo affichage($product);?>
      <?php } ?>
     </table>

 </body>
 </html>

