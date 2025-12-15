<!DOCTYPE html>
<html lang="ja">

<head>
  <title>課題16章</title>
  <meta charset="UTF-8">
</head>

<body>
  <p>
    <?php

    class Food {
      private $name;
      private $price;

      public function __construct(string $name, int $price) {
      $this->name  = $name;
      $this->price = $price;
    }

      public function show_price() {
        echo $this->price . '<br>';
      }
  }

    class Animal {

      private $name;
      private $height;
      private $weight;

      public function __construct(string $name, int $height, int $weight) {
        $this->name   = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      public function show_height() {
        echo $this->height . '<br>';
      }

  }

  $poteto = new Food('poteto', 250);


  $dog = new Animal('dog', 60, 5000);

  print_r($poteto);
  print_r($dog);
  
  $poteto->show_price();
  $dog->show_height();


  ?>

</p>
</body>
</html>