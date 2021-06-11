<?php
  require 'header.php';

  
  $page = 0;
  if(!empty($_POST['login'])){
    $page = 1;
  }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <title>Let's Shopping</title>
</head>
<body>
  <div class="container">
    <div class="login-container">
      <h1>LOGIN</h1>
      <?php if($page === 0): ?>
        <div class="loginForm">
          <form action="login.php" method="post">
            <p>メールアドレスを入力してください。</p>
            <input class="text-box" type="email" name="email">
            <p>パスワードを入力してください。</p>
            <input class="text-box" type="password" name="password"><br>
            <input class="login-btn" type="submit" name="login" value="ログインする">
          </form>
          <ul class="other">
            <li><a href="">メンバーサービスについてはこちら<span>></span></a></li>
            <li><a href="">パスワードを忘れた方はこちら<span>></span></a></li>
            <li><a href="">個人情報保護方針<span>></span></a></li>
            <li><a href="">会員規約<span>></span></a></li>
          </ul>
        </div>

        <hr>

        <p class="regist-text">お客様情報のご登録がお済みではない方はこちらから</p>
        <a class="regist-btn" href="registration.php">新規会員登録</a>
      <?php endif; ?>
      
      <?php if($page === 1): ?>
        <?php
          require 'maintenance/loginFunction.php';
          checkLogin($_POST);
        ?>
      <?php endif;?>
    </div>

  </div>
</body>
</html>