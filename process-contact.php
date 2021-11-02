<?php
include("includes/session-check.php");
$personId = $_SESSION["personId"];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
// insert data into db
// connect 
include('includes/db-connect.php');
// prepare
// mySQL variables use quotes
$stmt = $pdo->prepare("UPDATE `person` SET `phone` = '$phone',`email` = '$email', `address` = '$address' WHERE `person`.`personId` = $personId;");
// execute
if ($stmt->execute()) {
  // redirect
  // header('Location: index.php');
  echo ('thank you');
?>
  <a href="contact-form.php">go back</a>
<?php
} else {
  echo ('error');
?>
  <a href="contact-form.php">go back</a>
<?php
}
?>