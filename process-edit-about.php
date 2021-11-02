<?php
include('includes/session-check.php');
// 要加include，还有加一个管理员身份认证的include
include('includes/admin-check.php');
include('includes/db-connect.php');
$heading = $_POST["heading"];
$text = $_POST["text"];
$stmt = $pdo->prepare("UPDATE `about` SET `heading` = '$heading', `text` = '$text' WHERE `about`.`aboutId` = 1");

if ($stmt->execute()) {
  header("Location: about.php");
} else {
  echo ("error");
?>
  <a href="about.php">try again</a>
<?php
}
?>