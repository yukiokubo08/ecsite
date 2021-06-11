<?php

  require 'header.php';

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/product-list.css">
  <title>商品一覧</title>
</head>
<body>
  <div class="container">
    <div class="sub-menu">
      <a class="all-item" href="product-list.php">すべての商品を見る<span>></span></a>
      <div class="recommend-item">
        <img src="img/sub.jpg"><br>
        <img src="img/sub.jpg">
      </div>

      <div class="category">
        <p>ITEM SEARCH</p>
        <form action="" method="get">
          <input type="text" placeholder="キーワードを入力">
          <input type="submit" name="seach" value="検索">
        </form>
  
        <p>CATEGORY</p>
        <div class="category-list">
          <a href="">トップス</a><br>
          <a href="">アウター</a><br>
          <a href="">パンツ</a><br>
          <a href="">シューズ</a><br>
          <a href="">小物、アクセサリー</a><br>
        </div>
      </div>
    </div>
    <div class="product">
      <h1>Item List</h1>
        <?php
          require 'maintenance/productFunction.php';
          echo noSearchProduct();
        ?>
    </div>
  </div>
  

</body>
</html>