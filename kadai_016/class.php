<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UF-8">
    <title>PHP-BASIC-kadai_016</title>
  </head>
  <body>
    <p>
      <!-- food -->
      <?php
      // definition class
        class Food {
          //definition property
            private $name;
            private $price;
          // definition constructor
            public function __construct(string $name, int $price){
              $this ->name = $name;
              $this ->price = $price;
            }
          // create function output value of $price
            public function show_price() {
              echo $this ->price . '<br>';
            }
        }
      // instatiation
        $potato = new Food('potato', 250);
      // output each value of $potato
        print_r($potato);
        echo '<br>';
      // output price
        $potato ->show_price();
      ?>
    </p>
    <p>
      <!-- animal -->
      <?php
      // definition class
        class Animal {
          // definition property
            private $name;
            private $height;
            private $weight;
          // definition constructor
            public function __construct(string $name, int $height, int $weight) {
              $this ->name = $name;
              $this ->height= $height;
              $this ->weight= $weight;
            }
          // create function output value of $height
            public function show_height() {
            echo $this ->height . '<br>';
            }
        }
      // instantiation
        $dog = new Animal('dog', 60, 5000);
      // output each value of $dog
        print_r($dog);
        echo '<br>';
      // output height
        $dog ->show_height();          
      ?>
    </p>
  </body>
</html>