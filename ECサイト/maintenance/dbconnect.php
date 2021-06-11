<?php

  const DB_HOST = 'mysql:dbname=ecsite;host=localhost;charset=utf8';
  const DB_USER = 'root';
  const DB_PASS = '1408';

  try{
    $pdo = new PDO(DB_HOST, DB_USER, DB_PASS, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ERR_NONE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_EMULATE_PREPARES => false,
    ]);
  } catch(Exception $e){
    echo '接続に失敗しました。' . $e->getMessage() . '\n';
  }

?>