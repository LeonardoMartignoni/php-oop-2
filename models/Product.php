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