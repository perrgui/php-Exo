<?php
$pageTitle = "page de connection";
include 'includes/header.php';

if (isset($_POST['email'])) {
  $_SESSION['email'] = $_POST['email'];
  header('location: index.php?login=success'); // ? === $_GET
}
$errorMess = [];

foreach ($errorMess as $message) {
  if (!'login=success') {
?>
    <div class="alert alert-warning" role="alert">
      Mot de passe éronné!
    </div>
  <?php } else {
  ?>
    <div class="alert alert-success" role="alert">
      Mot de passe correct!
    </div>
  <?php } ?>
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