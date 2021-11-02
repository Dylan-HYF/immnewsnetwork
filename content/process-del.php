<?php
include('../includes/session-check.php');
// 要加include，还有加一个管理员身份认证的include
include('../includes/admin-check.php');
if (!isset($_GET["id"])) {
  echo ("no id");
?>
  <a href="/immnewsnetwork/index.php">go to index page</a>
  <?php
} else {
  $id = $_GET["id"];
  // connect 
  include('../includes/db-connect.php');
  $stmt = $pdo->prepare("DELETE FROM `article` WHERE `id` = $id");

  if ($stmt->execute()) {
    // echo ("success");
    header('Location: ../index.php');
  ?>
    <!-- <a href="../index.php">go to index page</a> -->
  <?php
  } else {
    echo ("error");
  ?>
    <a href="delete.php">try again</a>
<?php
  }
}
?>