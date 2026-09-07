<?php
  class TTRPG { // tabletop role-playing games
    var $name;
    var $author;
    var $dice = []; // dice types needed for game
    var $playerMin = 4;
    var $playerMax = 6;

    function howManyPlayers() {
      return "{$this->name} can host between {$this->playerMin} and {$this->playerMax} players, plus a GM.";
    }
  }

  class D20 extends TTRPG { // D20 systems like D&D
    var $dice = ["d4","d6","d8","d10","d12","d20"];
  }
  class PBTA extends TTRPG { // Powered by the Apocalypse systems
    var $dice = ["d6"];
    var $playerMin = 3;
  }

  class NDNM extends TTRPG { // No Dice No Masters systems
    var $playerMin = 1;
    var $playerMax = 5;

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

?>
