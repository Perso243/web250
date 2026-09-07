<?php

use Bicycle as GlobalBicycle;

class Bicycle {

  public $brand;
  public $model;
  public $year;
  public $description = 'Used bicycle';
  private $weightKg = 0.0;
  protected $wheels = 2;

  public function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  public function wheelDetails() {
    $wheelString = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels";
    return "It has " . $wheelString . ".";
  }

  public function getWeightKg() {
    return $this->weight_kg . ' kg';
  }

  public function setWeightKg($value) {
    $this->weight_kg = floatval($value);
  }

  public function getWeightLbs() {
    return floatval($this->weight_kg) * 2.2046226218 . ' lbs';
  }

  public function setWeightLbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

}

class Unicycle extends Bicycle {
  protected $wheels = 1;
}

$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';
$trek->setWeightKg(1.0);

$uni = new Unicycle;

echo "Bicycle: " . $trek->wheelDetails() . "<br>";
echo "Unicycle: " . $uni->wheelDetails() . "<br><br>";

echo "Set weight using kg: <br>";
$trek->setWeightKg(1);
echo $trek->getWeightKg() . "<br>";
echo $trek->getWeightLbs() . "<br><br>";

echo "Set weight using lbs: <br>";
$trek->setWeightLbs(2);
echo $trek->getWeightKg() . "<br>";
echo $trek->getWeightLbs() . "<br><br>";

?>
