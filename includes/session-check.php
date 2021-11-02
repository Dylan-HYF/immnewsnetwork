<?php
session_start();
if (!isset($_SESSION["personId"])) {
?>
    <p>unknown user</p>
    <a href="/immnewsnetwork/login.php">go back to login</a>
<?php
    // makes the code stop right here
    exit();
}
?>