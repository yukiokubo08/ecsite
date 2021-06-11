<?php

  function checkLogin($request){
    require 'maintenance/dbconnect.php';

    $stmt = $pdo->prepare('SELECT * FROM members WHERE email = :email');
    $stmt->execute([':email' => $request['email']]);
    $result = $stmt->fetch();

    if(password_verify($request['password'], $result['password'])){
      $_SESSION['member'] = $result;
      echo '<div class="loginStatus">';
      echo '<p>ようこそ' . $_SESSION['member']['name'] . 'さん。</p>';
      echo '<br>';
      echo '<a href="top.php">TOPへ戻る</a>';
      echo '</div>';
    } else {
      echo '<p>メールアドレスまたはパスワードが間違っています。</p>';
      echo '<br>';
      echo '<a href="login.php">やり直す</a>';
    }
  }

?>