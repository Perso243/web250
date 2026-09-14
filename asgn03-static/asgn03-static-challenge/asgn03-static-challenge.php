<?php

use Bicycle as GlobalBicycle;

class Bicycle {

  public $brand;
  public $model;
  public $year;
  public $description = 'Used bicycle';
  private $weightKg = 0.0;
  protected static $wheels = 2;
  public $cat;

  public static $instanceCount = 0;



  public const CATEGORIES = ['Road','Mountain','Hybrid','Cruiser','City','BMX'];

  public static function create() {
    $className = get_called_class();
    $object = new $className;

    self::$instanceCount++;

    return $object;
  }

  public function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  public static function wheelDetails() {
    $wheelString = static::$wheels == 1 ? "1 wheel" : (static::$wheels . " wheels");
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
  protected static $wheels = 1;

  // Extend - execute addition
  public static function wheelDetails() {
    $str = parent::wheelDetails() . " Don't lose your balance!";
    return $str;
  }

}

$trek = Bicycle::create();
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';
$trek->setWeightKg(1.0);
$trek->category = Bicycle::CATEGORIES[1];

$uni = Unicycle::create();
$uni->category = Unicycle::CATEGORIES[0];

echo "Wheel Counts" . "<br>";
echo "Bicycle: " . Bicycle::wheelDetails() . "<br>";
echo "Unicycle: " . Unicycle::wheelDetails() . "<br><br>";

echo "Bike Categories" . "<br>";
echo "Trek: " . $trek->category . "<br>";
echo "Uni: " . $uni->category . "<br><br>";

echo "Bike count: " . Bicycle::$instanceCount . "<br>";

?>
