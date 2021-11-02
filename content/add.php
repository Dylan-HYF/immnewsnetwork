<?php
include('../includes/session-check.php');
// 要加include，还有加一个管理员身份认证的include
include('../includes/admin-check.php');

include("../includes/header.php");
?>
<form action="process-add.php" method="post">
  heading: <input type="text" name="heading" required>
  <br>
  text: <textarea name="text" cols="30" rows="10" required></textarea>
  <br>
  <input type="submit">
</form>
<?php
include("../includes/footer.php");
?>