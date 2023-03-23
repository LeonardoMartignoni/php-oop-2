<?php
class Product {
  public $name;
  public $price;

  // Dichiaro il construct per verificare che arrivino tutti i dati
  function __construct($_name, $_price) {
    $this->setName($_name);
    $this->setPrice($_price);
  }

  // Controllo che la variabile $name sia una stringa, altrimenti restituisco false
  public function setName($name) {
    if(!is_string($name)) return false;
    $this->name = $name;
  }

  // Controllo che la variabile $price sia un numero e che non sia negativo, altrimenti restituisco false
  public function setPrice($price) {
    if(!is_numeric($price) || $price < 0) return false;
    $this->price = $price;
  }
}