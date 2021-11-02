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
  <form action="process-edit.php" method="post">
    <input type="hidden" name="id" value="<?= $id ?>">

    heading: <input type="text" name="heading" required value="<?= $row["heading"] ?>">
    <br>
    text: <textarea name="text" cols="30" rows="10" required><?= $row["text"] ?></textarea>
    <br>
    <input type="submit">
  </form>
<?php
  include("../includes/footer.php");
}
?>