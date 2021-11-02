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
  include('../includes/db-connect.php');
  $stmt = $pdo->prepare("SELECT * FROM `article` WHERE `id` = $id");
  $stmt->execute();
  $row = $stmt->fetch();

  include("../includes/header.php");
?>
  <h1>conformation for deleting article #<?= $row["id"] ?></h1>
  <a href="process-del.php?id=<?= $row["id"] ?>">Yes</a>
  <a href="../index.php">No</a>
<?php
  include("../includes/footer.php");
}
?>