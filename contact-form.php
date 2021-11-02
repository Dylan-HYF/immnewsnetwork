<?php
include("includes/session-check.php");
$personId = $_SESSION["personId"];
include('includes/db-connect.php');
$stmt = $pdo->prepare("SELECT * FROM `person` WHERE `personId` = $personId");
$stmt->execute();
$row = $stmt->fetch();
// $phone = $row["phone"] ? '' : $row["phone"];

?>
<form action="process-contact.php" method="post">
  phone: <input type="number" name="phone" value="<?= $row['phone'] ?>">
  email: <input type="email" name="email" value="<?= $row['email'] ?>">
  address: <input type="text" name="address" value="<?= $row['address'] ?>">
  <input type="submit">
</form>