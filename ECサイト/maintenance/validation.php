<?php

  function validation($request) {
    $errors = [];

    if(empty($request['name'])){
      $errors[] = '氏名を入力してください';
    }
  
    if(empty($request['email'])){
      $errors[] = 'メールアドレスを入力してください';
    }
    
    /* メールアドレスの重複チェック */
    if(!empty($request['email'])){
      require 'maintenance/dbconnect.php';
      $stmt = $pdo->prepare('SELECT * FROM members WHERE email = :email limit 1');
      $stmt->execute([':email' => $request['email']]);
      $result = $stmt->fetch();
      
      if($result > 1){
        $errors[] = 'このメールアドレスはすでに登録されています。';
      }
    }
  
    if(empty($request['address'])){
      $errors[] = '住所を入力してください';
    }
  
    if(empty($request['password'])){
      $errors[] = 'パスワードを入力してください';
    }
  
    /* パスワードの文字数チェック */
    if(!empty($request['password'])){
      if(strlen('password')<4){
        $errors[] = 'パスワードは4文字以上で入力してください';
      }
    }
  
    return $errors;
    
  }

?>