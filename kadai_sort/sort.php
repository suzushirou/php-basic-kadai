<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP-BASIC-kadai_sort</title>
  </head>
  <body>
    <p>
      <?php
      $nums = [15, 4, 18, 23, 10];
      // Create original function
      function sort_2way($array, $order) {
        // $orderがtrueなら昇り順でソート
        if ($order){
          echo '昇り順でソートします。<br>';
          sort ($array);
          foreach ($array as $num){
            echo "{$num} <br>";
          }
        } else {
          echo '降順でソートします。<br>';
          rsort ($array);
          foreach ($array as $num){
            echo "{$num} <br>";
        }
      }
    }
    sort_2way ($nums, true);
    sort_2way ($nums, false);
    
      ?>
    </p>
  </body>
</html>