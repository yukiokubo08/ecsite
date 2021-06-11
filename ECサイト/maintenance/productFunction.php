<?php

  function noSearchProduct(){
    require 'maintenance/dbconnect.php';

    $stmt = $pdo->prepare('SELECT * FROM products');
    $stmt->execute([]);
    echo '<div class="item">';
    foreach($stmt->fetchAll() as $product){ /* foreach → {}内にある処理を繰り返す。 fetchAll → 指定された要素の全ての値を抜き出し、＄productに代入する。 */
      $id = $product['id'];

      echo '<div class="item-list">';
      echo '<div class="item-img">';
      echo '<a href=""><img src="img/' . $id . '.jpg" class="product-img"></a>';
      echo '</div>';
      echo '<div class="item-text">';
      echo '<a href="">' . $product['name'] . '</a>';
      echo '<p>¥' . number_format($product['price']) . '</p>';
      echo '</div>';
      echo '</div>';
    }

    echo '</div>';
  }

?>