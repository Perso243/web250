<?php

class Bird {
  public $commonName;
  public $latinName;

  public function __construct($commonName, $latinName) {
    $this->commonName = $commonName;
    $this->latinName = $latinName;
  }
}

$robin = new Bird('Robin', 'Turdus migratorius');
$towhee = new Bird('Eastern Towhee', 'Pipilo erythrophthalmus');

echo "Common name: " . $robin->commonName . "<br>";
echo "Lain name: " . $robin->latinName . "<br>";
echo "<hr>";
echo "Common name: " . $towhee->commonName . "<br>";
echo "Lain name: " . $towhee->latinName . "<br>";


?>
