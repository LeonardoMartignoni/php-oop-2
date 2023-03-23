<?php

class Toys extends Product {
  public $name;
  public $price;
  public $material;
  public $type;

  function __construct($_name, $_price, $_material, $_type) {
    parent::__construct($_name, $_price);
    $this->setMaterial($_material);
    $this->setType($_type);
  }

  public function setMaterial($material) {
    if (!is_string($material)) return false;
    $this->material = $material;
  }

  public function setType($type) {
    if (!is_string($type)) return false;
    $this->type = $type;
  }
}