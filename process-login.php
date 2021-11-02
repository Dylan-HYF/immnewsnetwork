<?php

session_start();

$username = $_POST["username"];
$password = $_POST["password"];

// connect 
include('includes/db-connect.php');
// prepare
// mySQL variables use quotes
// `` table names;field names;database names
// integers(整数) or numbers don't need single quotes
$stmt = $pdo->prepare("SELECT * FROM `person` WHERE `username` = '$username' AND `password` = '$password'");
// execute
$stmt->execute();
// $row is the data i fetched
if ($row = $stmt->fetch()) {
  $_SESSION["personId"] = $row["personId"];
  $_SESSION["username"] = $row["username"];
  header("Location: index.php");
  // echo ($row["username"]);
} else {
?>
  <p>NOT correct</p>
  <a href="login.php">back to login</a>
<?php
}
