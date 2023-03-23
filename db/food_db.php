<?php

require_once __DIR__ . '../../models/Product.php';
require_once __DIR__ . '../../models/Food.php';

$food_list = [
  new Food("Royal Canin", 3.99, "03/2024", "Chicken"),
  new Food("Virtus Dog", 2.49, "05/2023", "Cow"),
  new Food("Cesar", 0.89, "04/2023", "Pig"),
];