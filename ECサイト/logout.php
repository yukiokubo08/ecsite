<?php

  require 'header.php';

  
  $page = 0;
  if(!empty($_POST['logout'])){
    $page = 1;
  }

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログアウト</title>
</head>
<body>
  <h1>LOGOUT</h1>
  <?php if($page === 0): ?>
    <form action='logout.php' method='post'>
      <input type='submit' name='logout' value='ログアウトする'>
      <br>
      <a href='top.php'>TOPへ戻る</a>
    </form>
  <?php endif; ?>

  <?php if($page === 1): ?>
    <?php unset($_SESSION['member']) ?>
    <p>ご利用いただきありがとうございました。<br>ログアウトしました。</p>
    <a href='top.php'>TOPへ戻る</a>
  <?php endif; ?>
</body>
</html>