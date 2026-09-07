<?php

class Bike {
  var $brand;
  var $model;
  var $year;
  var $description;
  var $weight_kg = 0.0;

  function name() {
    return $this->year . " " . $this->brand . " " . $this->model;
  }

  function weight_lbs() {
    return floatval($this->weight_kg) * 2.2046226218;
  }

  function set_weight_lbs($lbs) {
    $this->weight_kg = floatval($lbs) / 2.2046226218;
  }

}

$bike1 = new Bike;
$bike1->brand = 'Trek';
$bike1->model = 'Emonda';
$bike1->year = '2017';
$bike1->weight_kg = 1.0;

$bike2 = new Bike;
$bike2->brand = 'Cannondale';
$bike2->model = 'Synapse';
$bike2->year = '2016';
$bike2->weight_kg = 8.0;

echo "Bike 1: " . $bike1->name() . "<br>";
echo "Bike 2: " . $bike2->name() . "<br>";
echo "<br>";
echo "Bike 1 weight kg: " . $bike1->weight_kg . "<br>";
echo "Bike 1 weight lbs: " . $bike1->weight_lbs() . "<br>";
echo "<br>";
$bike2->set_weight_lbs(2);
echo "Bike 2 new weight lbs: " . $bike2->weight_lbs() . "<br>";
echo "Bike 2 new weight kg: " . $bike2->weight_kg;

?>
