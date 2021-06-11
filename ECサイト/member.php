<?php

  require 'header.php'; 
  session_start();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/member.css">
  <title>Let's Shopping</title>
</head>
  <div class="container">  
    <h1 class="member-tittle">MEMBER</h1>
    <div class="member-contents">
      <hr>

      <div class="leftMenu">
        <a href="">パスワード変更</a></a><br>
        <a href="">登録内容変更</a><br>
        <a href="">購入履歴</a><br>
        <a href="logout.php">ログアウト</a><br>
        <a href="">退会手続き</a>
      </div>

      <div class="rightMenu">
        <p class="member-info">会員情報</p>
        <hr>
        <p class="discription">お客様の会員基本情報は下記の通りです。修正箇所があれば、修正して「確認する」ボタンを押してください。</p>
        <table>
          <tr>
            <td>氏名</td>
            <td><?php echo $_SESSION['member']['name'] ?></td>
          </tr>

          <tr>
            <td>メールアドレス</td>
            <td><?php echo $_SESSION['member']['email'] ?></td>
          </tr>

          <tr>
            <td>住所</td>
            <td><?php echo $_SESSION['member']['address'] ?></td>
          </tr>

        </table>
      </div>
    </div>
  </div>
</body>
</html>

