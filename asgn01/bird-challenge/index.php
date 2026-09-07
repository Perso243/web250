<?php

class Bird {
  var $commonName;
  var $food = 'bugs';
  var $nestPlacement = 'tree';
  var $conservationLevel;
  var $song;
  var $fly;

  function song($soundsLike) {
    $this->song = $soundsLike;
  }

  function canFly() {
    if ($this->fly) {
      return "This bird can fly";
    } else {
      return "This bird can't fly";
    }
  }
}

// create
$bird1 = new Bird;
$bird2 = new Bird;

// populate
$bird1->commonName = 'Eastern Towhee';
$bird1->food = 'seeds, fruits, insects, spiders';
$bird1->nestPlacement = 'Ground';
$bird1->conservationLevel = 'Low';
$bird1->fly = 'true';
$bird1->song('drink-your-tea!');

$bird2->commonName = 'Indigo Bunting';
$bird2->food = 'small seeds, berries, buds, and insects';
$bird2->nestPlacement = 'roadsides, and railroad rights-of-wafields [sic] and on the edges';
$bird2->conservationLevel = 'Low';
$bird2->fly = 'true';
$bird2->song('whatwhat!!');

//display
$birds = [$bird1, $bird2];
foreach($birds as $bird) {
  echo "Name: " . $bird->commonName . "<br>";
  echo "Food: " . $bird->food . "<br>";
  echo "Nest placement: " . $bird->nestPlacement . "<br>";
  echo "Conservation level: " . $bird->conservationLevel . "<br>";
  echo "Bird song: " . $bird->song . "<br>";
  echo "Can it fly? " . $bird->canFly() . "<br><br>";
}

?>
