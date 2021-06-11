<?php

  if(!empty($_SESSION['member'])){
    $status = 'ようこそ' . $_SESSION['member']['name'] . 'さん。';
    $result = '<a href="member.php"><img src="img/human.png"></a>';
  } else {
    $status =  'ようこそゲストさん';
    $result = '<a href="login.php"><img src="img/human.png"></a>';
  }

?>