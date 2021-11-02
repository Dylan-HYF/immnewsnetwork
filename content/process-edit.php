<?php
include('../includes/session-check.php');
// 要加include，还有加一个管理员身份认证的include
include('../includes/admin-check.php');
if (!isset($_POST["id"])) {
  echo ("no id");
?>
  <a href="/immnewsnetwork/index.php">go to index page</a>
  <?php
} else {
  $id = $_POST["id"];
  $heading = $_POST["heading"];
  $text = $_POST["text"];
  // connect 
  include('../includes/db-connect.php');
  $stmt = $pdo->prepare("UPDATE `article` SET `heading` = '$heading', `text` = '$text' WHERE `article`.`id` = $id");

  if ($stmt->execute()) {
    echo ("success");
  ?>
    <a href="../index.php">go to index page</a>
  <?php
  } else {
    echo ("error");
  ?>
    <a href="edit.php">try again</a>
<?php
  }
}
?>