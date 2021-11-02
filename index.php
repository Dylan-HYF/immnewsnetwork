<?php
include('includes/session-check.php');
include('includes/header.php');
$personId = $_SESSION["personId"];

include('includes/db-connect.php');
// $user = $pdo->prepare("SELECT * FROM `user-article` WHERE `user-article`.`userId` = $personId;");
// $user->execute();
// $userLike = $user->fetchAll();
// print_r($userLike);
$stmt = $pdo->prepare("SELECT * FROM `article`");
$stmt->execute();
while ($row = $stmt->fetch()) {
  $articleId = $row["id"];
  // echo ($articleId);
  // should use sql SELECT COUNT
  $st = $pdo->prepare("SELECT * FROM `user-article` WHERE `user-article`.`articleId` = $articleId;");
  $st->execute();
  $like = $st->fetchAll();
  $likes = count($like);
  // print_r($like);
  // for ($i = 0; $i < count($userLike); $i++) {
  //   // echo ($userLike[$i]);
  //   if ($articleId == $userLike[$i]['articleId']) {
  //     $articleLike = "true";
  //   } else {
  //     $articleLike = "false";
  //   }
  // }
  $user = $pdo->prepare("SELECT * FROM `user-article` WHERE `user-article`.`userId` = $personId AND `user-article`.`articleId` = $articleId;");
  $user->execute();
  $userLike = $user->fetch();
?>
  <article>
    <?php
    if ($row["featured"] == 1) {
      // $featured = "featured";
    ?>
      <h1>
        <?php
        echo ($row["heading"]);
        ?>
        <i class="iconfont" style="font-size: 25px;color: #f54242">&#xe866;</i>
      </h1>
    <?php
    } else if ($row["featured"] == 0) {
      // $featured = "";
    ?>
      <h1>
        <?php
        echo ($row["heading"]);
        ?>
      </h1>
    <?php
    }
    ?>
    <!-- <h1><?= $row["heading"] ?></h1> -->
    <p><?= $row["text"] ?></p>
    <?php
    if ($userLike) {
    ?>
      <a class="btn" href="process-like.php?userId=<?= $_SESSION["personId"] ?>&articleId=<?= $row["id"] ?>&like=0">unlike(<?= $likes ?>)</a>

    <?php
    } else {
    ?>
      <a class="btn" href="process-like.php?userId=<?= $_SESSION["personId"] ?>&articleId=<?= $row["id"] ?>&like=1">like(<?= $likes ?>)</a>

    <?php
    }
    // should use roleId(a new column in the table)
    if ($_SESSION["personId"] == 1) {
    ?>
      <a class="btn" href="content/edit.php?id=<?= $row["id"] ?>">edit</a>
      <a class="btn" href="content/delete.php?id=<?= $row["id"] ?>">delete</a>
      <a class="btn" href="content/featured.php?id=<?= $row["id"] ?>">featured</a>
    <?php
    }
    ?>
  </article>
  <hr>
<?php

}
include('includes/footer.php');
?>