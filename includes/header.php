 <?php
include 'function.php';
include 'variables.php';

if (!isset($pageTitle)) {
    $pageTitle = "Titre non défini";
}
?>

 <!DOCTYPE html>
<html lang="en">
 
 <head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title><?= $pageTitle; ?></title>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand title color-dark" href="index.php">Manon's hats</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item my-auto">
              <form class="d-flex justify-content-center align-self-center">
                <input  type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            <!-- <a class="nav-link disabled">Disabled</a> -->
          </li> 
        <li class="nav-item">
          <a class="nav-link active " style=" font-size: 2rem" aria-current="page" href="index.php">Acceuil</a>
        </li>
          <li class="nav-item self-justify-end">
          <a class="nav-link "  style=" font-size: 2rem" href="list.php">Les Produits</a>
        </li>
        
        </ul>
        
    </div>
  </div>
</nav>

    <h1 class="text-info text-center title" style="margin: 3rem;"><?= $pageTitle; ?></h1>

    <div class="container d-flex justify-content-center align-items-center">