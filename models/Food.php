<?php

class Food extends Product {
  public $name;
  public $price;
  public $expire_date;
  public $meat;

  function __construct($_name, $_price, $_expire_date, $_meat) {
    // Uso il construct del genitore (Product)
    parent::__construct($_name, $_price);
    $this->setExpire($_expire_date);
    $this->setMeat($_meat);
  }

  public function setExpire($expire_date) {
    if (!is_string($expire_date)) return false;
    $this->expire_date = $expire_date;
  }

  public function setMeat($meat) {
    if (!is_string($meat)) return false;
    $this->meat = $meat;
  }
}