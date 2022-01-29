<?php
$pageTitle ="page de connection";
include 'includes/header.php';
?>


<h1 class="text-primary " style="uppercase"> connection </h1>
<form class="row g-3">
  <div class="row-auto">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
  </div>
  <div class="row-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <div class="row-auto">
    <button type="submit" class="btn btn-primary mb-3">Confirmer identité</button>
  </div>
</form>

<?php 
include 'includes/footer.php';
?>