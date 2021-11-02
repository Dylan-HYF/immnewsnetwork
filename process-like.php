<?php
/*
用户点击喜欢，记录用户的喜欢与否
文章统计总共有多少个喜欢（点喜欢加1，不喜欢减1）

1. user click like button, I record whether 
they like this article or not

2. record how many likes an article has, 
store in a column of article table
*/
include('includes/session-check.php');
// 要加include，还有加一个管理员身份认证的include
include('includes/admin-check.php');
$userId = $_GET["userId"];
$articleId = $_GET["articleId"];
$ifLike = $_GET["like"];
// connect 
include('includes/db-connect.php');
if ($ifLike == 1) {
  $stmt = $pdo->prepare("INSERT INTO `user-article` (`userId`, `articleId`) VALUES ('$userId', '$articleId');");
  if ($stmt->execute()) {
    header("Location: index.php");
  } else {
    echo ("error");
?>
    <a href="index.php">go to index page</a>
  <?php
  }
} else {
  // should use a like field to record dislike as well
  $stmt = $pdo->prepare("DELETE FROM `user-article` WHERE `user-article`.`articleId` = $articleId AND `user-article`.`userId` = $userId");
  if ($stmt->execute()) {
    header("Location: index.php");
  } else {
    echo ("error");
  ?>
    <a href="index.php">go to index page</a>
<?php
  }
}
?>