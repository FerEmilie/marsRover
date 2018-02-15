<?php

/**
 *
 */
class Rover
{
  public $x = 0;
  public $y = 0;
  public $direction = "s";

  public function setDirection($direction){
      return $this->direction = $direction;
  }

  public function setX($x){
      return $this->x = $x;
  }

  public function setY($y){
      return $this->y = $y;
  }

  public function forward(){
    if($this->direction == "n"){
      $this->y--;
      $this->x;
    }
    elseif ($this->direction == "s") {
      $this->y++;
      $this->x;
    }
    elseif ($this->direction == "e") {
      $this->x++;
      $this->y;
    }
    elseif ($this->direction == "w") {
      $this->x--;
      $this->y;
    }
  }

  public function turnLeft(){
    if ($this->direction == "n") {
      $this->direction = "w";
    }
    elseif ($this->direction == "s") {
      $this->direction = "e";
    }
    elseif ($this->direction == "w") {
      $this->direction = "s";
    }
    elseif ($this->direction == "e") {
      $this->direction = "n";
    }

  }

  public function turnRight(){
    if ($this->direction == "n") {
      $this->direction = "e";
    }
    elseif ($this->direction == "s") {
      $this->direction = "w";
    }
    elseif ($this->direction == "w") {
      $this->direction = "n";
    }
    elseif ($this->direction == "e") {
      $this->direction = "s";
    }
  }

  public function backward(){
    if($this->direction == "n"){
      $this->y++;
      $this->x;
    }
    elseif ($this->direction == "s") {
      $this->y--;
      $this->x;
    }
    elseif ($this->direction == "e") {
      $this->x--;
      $this->y;
    }
    elseif ($this->direction == "w") {
      $this->x++;
      $this->y;
    }
  }

}
