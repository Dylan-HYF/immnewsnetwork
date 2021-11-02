<?php
include('../includes/session-check.php');
// 要加include，还有加一个管理员身份认证的include
include('../includes/admin-check.php');
$heading = $_POST["heading"];
$text = $_POST["text"];
// connect 
include('../includes/db-connect.php');
$stmt = $pdo->prepare("INSERT INTO `article` (`id`, `heading`, `text`, `featured`) VALUES (NULL, '$heading', '$text', 0);");

if ($stmt->execute()) {
  echo ("success");
?>
  <a href="../index.php">go to index page</a>
<?php
} else {
  echo ("error");
?>
  <a href="add.php">try again</a>
<?php
}
?>