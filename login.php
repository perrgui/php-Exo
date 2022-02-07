<?php

$pageTitle = "page de connection";
include 'includes/header.php';

$defaultPassword = "toto";
$errorMess = [];

if (isset($_POST['email']) && isset($_POST['password'])) {
  $password = $_POST['password'];

  if (empty($password)) {
    $errorMess[] = "veuillez renseigner un mot de passe";
  } elseif ($password != $defaultPassword) {
    $errorMess[] = "le code rentré est incorrect!";
  }

  if (empty($errorMess)) {
    $_SESSION['email'] = $_POST['email'];
?>
    <div class="alert alert-success" role="alert">
      Vous êtes bien connectés! </div>
<?php
    header('location: index.php?login=success'); // ? === $_GET
  }
}
?>


<?php foreach ($errorMess as $message) {

?>
  <div class="alert alert-warning" role="alert">
    <?= $message; ?>
  </div>
<?php }
?>





<form class="row g-3" method="post" action="">
  <div class="row-auto">
    <label for="email" class="text-primary">Email</label>
    <input type="text" class="form-control" id="email" placeholder="email@example.com" name="email">
  </div>
  <div class="row-auto">
    <label for="password" class="text-primary">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
  </div>
  <div class="row-auto">
    <button type="submit" class="btn btn-primary mb-3">Confirmer identité</button>
  </div>
</form>

<?php
include 'includes/footer.php';
?>