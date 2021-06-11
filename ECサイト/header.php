<?php
  session_start();
  require 'maintenance/loginStatus.php';
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/header.css">
  <title>Let's Shopping</title>
</head>
<body>
  <header>
    <div class="container">

      <div class="header-container">
        <h1 class="tittle"><a href="top.php">Let's Shopping</a></h1>
        <nav>
          <ul class="menu">
            <li class="user"><?php echo $status ?></li>
            <li class="menu-list"><a href="top.php">TOP</a></li>
            <li class="menu-list"><a href="product-list.php">商品一覧</a></li>
            <li class="menu-list"><a href="">カート</a></li>
            <li class="menu-list"><a href="">お気に入り</a></li>
            <li class="menu-list"><a href="logout.php">LOGOUT</a></li>
            <li><?php echo $result ?></li>
          </ul>
        </nav>
      </div> 

    </div>
  </header>
  <hr>
</body>
</html>