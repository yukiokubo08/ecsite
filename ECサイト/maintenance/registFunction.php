<?php

  function insertRegist($request){
    require 'maintenance/dbconnect.php';

    $stmt = $pdo->prepare('INSERT INTO members(name, email, address, password) VALUE(?, ?, ?, ?)');
    $stmt->execute([
      $request['name'],
      $request['email'],
      $request['address'],
      password_hash($request['password'], PASSWORD_DEFAULT)
    ]);

  }

?>