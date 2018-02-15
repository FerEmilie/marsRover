<?php

/**
 *
 */
class RoverCourt
{
  public $direction = ["n", "e", "s", "w"];
  public $tx = [0, 1, 0, -1];
  public $ty = [-1, 0, 1, 0];

  public function forward()
  {

     $i = array_search($this->direction, $direction);
     $this->x = $x + $tx[$i + 1];
     $this->y = $y + $ty[$i + 1];
  }
}
