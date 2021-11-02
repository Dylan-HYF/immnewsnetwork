<?php
// include("includes/session-check.php");

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$dob = $_POST['dob'];
$username = $_POST['username'];
$password = $_POST['password'];
// insert data into db
// connect 
include('includes/db-connect.php');
// prepare
// mySQL variables use quotes
$stmt = $pdo->prepare("INSERT INTO `person` (`personId`, `fName`, `lName`, `dob`, `username`, `password`, `phone`, `email`, `address`) VALUES (NULL, '$firstName', '$lastName', '$dob', '$username', '$password', NULL, '', '');");
// execute
if ($stmt->execute()) {
  // redirect
  header('Location: login.php');
  // echo ('success');
} else {
  echo ('error');
?>
  <a href="register.php">go back</a>
<?php
}
?>