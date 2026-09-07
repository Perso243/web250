<?php
  class TTRPG { // tabletop role-playing games
    public $name;
    public $author;
    public $dice = []; // dice types needed for game
    protected $playerMin = 4;
    protected $playerMax = 6;

    public function setPlayerMin($value) { // will only update if the new minimum is lower or equal to the current maximum
      $this->playerMin = $value <= $this->playerMax ? $value : $this->playerMin;
    }

    public function getPlayerMin() {
      return $this->playerMin;
    }

    public function setPlayerMax($value) { // will only update if the new minimum is lower or equal to the current maximum
      $this->playerMax = $value >= $this->playerMin ? $value : $this->playerMax;
    }

    public function getPlayerMax() {
      return $this->playerMax;
    }

    public function howManyPlayers() {
      return "{$this->name} can host between {$this->playerMin} and {$this->playerMax} players, plus a GM.";
    }
  }

  class D20 extends TTRPG { // D20 systems like D&D
    public $dice = ["d4","d6","d8","d10","d12","d20"];
  }
  class PBTA extends TTRPG { // Powered by the Apocalypse systems
    public $dice = ["d6"];
    protected $playerMin = 3;
  }

  class NDNM extends TTRPG { // No Dice No Masters systems
    protected $playerMin = 1;
    protected $playerMax = 5;

    function howManyPlayers()
    {
      return "{$this->name} can host between {$this->playerMin} and {$this->playerMax} players, and does not require a GM.";
    }
  }

  $dnd = new D20;
  $dnd->name = "Dungeons & Dragons";
  $dnd->author = "Wizards of the Coast";

  $mh = new PBTA;
  $mh->name = "Monsterhearts 2";
  $mh->author = "Avery Adler";

  $wh = new NDNM;
  $wh->name = "Wanderhome";
  $wh->author = "Jay Dragon";

  echo $dnd->howManyPlayers() . "<br>";
  echo $mh->howManyPlayers() . "<br>";
  echo $wh->howManyPlayers() . "<br>";
  echo "<br>";

  echo "Using new setter: <br>";
  $mh->setPlayerMin(10);
  echo "Set player minimum to 10, result: " . $mh->getPlayerMin() . "<br>";
  $mh->setPlayerMin(5);
  echo "Set player minimum to 5, result: " . $mh->getPlayerMin() . "<br>";

?>
