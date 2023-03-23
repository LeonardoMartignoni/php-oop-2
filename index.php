<?php
class Product {
  public $color;
  public $price;

  // Dichiaro il construct per verificare che arrivino tutti i dati
  function __construct($_color, $_price) {
    $this->setColor($_color);
    $this->setPrice($_price);
  }

  // Controllo che la variabile $color sia una stringa, altrimenti restituisco false
  public function setColor($color) {
    if(!is_string($color)) return false;
    $this->color = $color;
  }

  // Controllo che la variabile $price sia un numero e che non sia negativo, altrimenti restituisco false
  public function setPrice($price) {
    if(!is_numeric($price) || $price < 0) return false;
    $this->price = $price;
  }
}

var_dump(new Product("red", 5));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 2</title>
</head>
<body>
  
</body>
</html>