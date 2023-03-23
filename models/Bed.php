<?php

class Bed extends Product {
  public $name;
  public $price;
  public $dimension;

  function __construct($_name, $_price, $_dimension) {
    parent::__construct($_name, $_price);
    $this->setDimension($_dimension);
  }

  public function setDimension($dimension_lc) {
    // Trasformo la dimensione da lowercase a uppercase per evitare problemi in caso di lettera minuscola
    $dimension = strtoupper($dimension_lc);
    
    if (!is_string($dimension) || $dimension != "XS" && $dimension != "S" && $dimension != "M" && $dimension != "L" && $dimension != "XL"  && $dimension != "XXL") return false;
    $this->dimension = $dimension;
  }
}