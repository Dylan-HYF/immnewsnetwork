<?php
if ($_SESSION["personId"] != 1) {
  echo ("You are not the administrator");
?>
  <a href="/immnewsnetwork/index.php">go to index page</a>
<?php
  // include('includes/footer.php');

  exit();
}
?>