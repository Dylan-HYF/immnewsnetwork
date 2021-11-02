<?php
include("includes/session-check.php");
include("includes/admin-check.php");



// connect 
include('includes/db-connect.php');
// prepare
// mySQL variables use quotes
$stmt = $pdo->prepare("SELECT * FROM `person`");
// execute
$stmt->execute();
// display
include('includes/header.php');
?>
<h1>user list</h1>

<?php
while ($row = $stmt->fetch()) {
?>
  <p>
    <?php
    echo ($row["personId"]);
    echo ('<br>');
    echo ($row["fName"]);
    echo ('<br>');
    echo ($row["lName"]);
    echo ('<br>');
    echo ($row["dob"]);
    echo ('<br>');
    echo ($row["phone"]);
    echo ('<br>');
    echo ($row["email"]);
    echo ('<br>');
    echo ($row["address"]);
    echo ('<br>');
    ?>
  </p>
  <hr>
<?php
}

include('includes/footer.php');

?>