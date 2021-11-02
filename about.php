<?php
include('includes/session-check.php');
// 要加include，还有加一个管理员身份认证的include
// include('includes/admin-check.php');
include('includes/db-connect.php');
// $stmt = $pdo->prepare("SELECT * FROM `article`");
$stmt = $pdo->prepare("SELECT * FROM `about`");

$stmt->execute();
$row = $stmt->fetch();
include("includes/header.php");
?>
<h1><?= $row["heading"] ?></h1>
<p><?= $row["text"] ?></p>
<?php
session_start();

if ($_SESSION["personId"] == 1) {
?>
  <a href="edit-about.php">edit</a>
<?php
}
include("includes/footer.php");
?>