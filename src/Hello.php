<?php

/**
 *
 */
class Hello
{
  public $greetings = "bonjour cher ";
  public $name;

  public function __construct($name){
      $this->greetings = "bonjour cher " . $name;
      $this->name = $name;
  }

  public function getName(){
    return $this->name;
  }

  public function setName($name){
    return $this->name = $name;
  }

}
