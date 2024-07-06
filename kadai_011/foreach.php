<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP-BASIC-kadai_011</title>
  </head>
  <body>
    <p>
      <?php
      //Create an associative array and assign it to a variable
      $vegetables = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
      foreach($vegetables as $key => $value){
        echo "{$key}:{$value}<br>";
      }
      ?>
    </p>
  </body>
</html>