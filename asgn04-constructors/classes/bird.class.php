<?php

class Bird {
  public $commonName;
  public $latinName;

  public function __construct($args) {
    $this->commonName = $args['commonName'] ?? NULL;
    $this->latinName = $args['latinName'] ?? NULL;
  }

  public function description() {
    $msg = "The <i>{$this->latinName}</i> is more commonly known as the {$this->commonName}.";
    return $msg;
  }
}

?>
