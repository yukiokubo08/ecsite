<?php
  require 'header.php';
  require 'maintenance/validation.php';
  $errors = validation($_POST);
  
  $page = 0;
  
  if(!empty($_POST['regist']) && empty($errors)){
    $page = 1;
  }
  
  if(!empty($_POST['regist_check'])){
    $page = 2;
  }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/validation.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
  <h1>SIGN UP</h1>
    <?php if($page === 0): ?>
      <div class="error">
        <?php
          if(!empty($errors) && !empty($_POST['regist'])){
            echo '<ul>';
            foreach($errors as $error){
              echo '<li>' . $error . '</li>';
            }
            echo '</ul>';
          }  
        ?>
      </div>

      <form action="registration.php" method="post">
       <p>氏名：<input type="text" name="name" value="<?php echo $_POST['name']; ?>"></p>
       <p>メールアドレス：<input type="email" name="email" value="<?php echo $_POST['email']; ?>"></p>
       <p>住所：<input type="address" name="address" value="<?php echo $_POST['address']; ?>"></p>
       <p>パスワード：<input type="password" name="password"></p>
       <input type="submit" name="regist" value="登録する">
      </form>
    <?php endif; ?>

    <?php if($page === 1): ?>
      <form action="registration.php" method="post">
       <p>氏名：<?php echo $_POST['name'] ?></p>
       <p>メールアドレス：<?php echo $_POST['email'] ?></p>
       <p>住所：<?php echo $_POST['address'] ?></p>
       <p>パスワードは表示されません</p>
       <input type="submit" name="back" value="戻る">
       <input type="submit" name="regist_check">
       <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
       <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
       <input type="hidden" name="address" value="<?php echo $_POST['address']; ?>">
       <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>">
      </form>
    <?php endif; ?>

    <?php if($page === 2): ?>
      <p>会員登録が完了しました</p>
      <?php
        require 'maintenance/registFunction.php';
        insertRegist($_POST);
      ?>
      <a href="top.php">TOPへ戻る</a>
    <?php endif; ?>

  </div>
</body>
</html>