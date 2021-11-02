<?php
include('includes/session-check.php');
// 要加include，还有加一个管理员身份认证的include
include('includes/admin-check.php');
include('includes/db-connect.php');
$stmt = $pdo->prepare("SELECT * FROM `about`");
$stmt->execute();
$row = $stmt->fetch();
include("includes/header.php");

?>
<form action="process-edit-about.php" method="post">

  heading: <input type="text" name="heading" required value="<?= $row["heading"] ?>">
  <br>
  text: <textarea name="text" cols="30" rows="10" required><?= $row["text"] ?></textarea>
  <br>
  <input type="submit">
</form>
<?php
include("includes/footer.php");
?>