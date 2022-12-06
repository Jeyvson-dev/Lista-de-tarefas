<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $username = 'root';
    $password = '123456';

try {
    $conexao = new PDO($dsn, $username, $password);

    

      
  } catch(PDOException $e) {

      echo 'ERROR: ' . $e->getMessage();

  }


?>
