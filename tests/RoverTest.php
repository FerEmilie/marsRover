<?php

require __DIR__ .'/../src/Rover.php';
require __DIR__ .'/../src/RoverCourt.php';
use PHPUnit\Framework\TestCase;
/**
 *
 */
class RoverTest extends TestCase
{
  public function testForward()
  {
    $rover = new Rover();
    $forward = $rover->forward();
    $this->assertEquals($rover->x, 0);
    $this->assertEquals($rover->y, 1);
    $this->assertEquals($rover->direction, "s");
  }

  public function testForwardTwo()
  {
    $rover = new Rover();
    $forward = $rover->forward();
    $forward = $rover->forward();
    $this->assertEquals($rover->x, 0);
    $this->assertEquals($rover->y, 2);
    $this->assertEquals($rover->direction, "s");
  }


  public function testTurnLeftDepuisSud()
  {
    $rover = new Rover();
    $turnLeft = $rover->turnLeft();
    $this->assertEquals($rover->x, 0);
    $this->assertEquals($rover->y, 0);
    $this->assertEquals($rover->direction, "e");
  }

  public function testTurnLeftDepuisEst()
  {
    $rover = new Rover();
    $turnLeft = $rover->turnLeft();
    $turnLeft = $rover->turnLeft();
    $this->assertEquals($rover->x, 0);
    $this->assertEquals($rover->y, 0);
    $this->assertEquals($rover->direction, "n");
  }

  public function testTurnLeftDepuisNord()
  {
    $rover = new Rover();
    $turnLeft = $rover->turnLeft();
    $turnLeft = $rover->turnLeft();
    $turnLeft = $rover->turnLeft();
    $turnLeft = $rover->turnLeft();
    $this->assertEquals($rover->x, 0);
    $this->assertEquals($rover->y, 0);
    $this->assertEquals($rover->direction, "s");
  }

  public function testTurnRightDepuisNord()
  {
    $rover = new Rover();
    $turnRight = $rover->turnRight();
    $turnRight = $rover->turnRight();
    $turnRight = $rover->turnRight();
    $turnRight = $rover->turnRight();
    $this->assertEquals($rover->x, 0);
    $this->assertEquals($rover->y, 0);
    $this->assertEquals($rover->direction, "s");
  }

  public function testTurnLeftAvecSet()
  {
    $rover = new Rover();
    $dir = $rover->setDirection('n');
    $turnLeft = $rover->turnLeft();
    $this->assertEquals($rover->x, 0);
    $this->assertEquals($rover->y, 0);
    $this->assertEquals($rover->direction, "w");
  }

  public function testTurnRightAvecSet()
  {
    $rover = new Rover();
    $dir = $rover->setDirection('n');
    $turnLeft = $rover->turnRight();
    $this->assertEquals($rover->x, 0);
    $this->assertEquals($rover->y, 0);
    $this->assertEquals($rover->direction, "e");
  }

  public function testSetxDepuisNord()
  {
    $rover = new Rover();
    $dir = $rover->setDirection('n');
    $x = $rover->setX(3);
    $forward = $rover->forward();
    $this->assertEquals($rover->x, 3);
  }

  public function testSetxDepuisEst()
  {
    $rover = new Rover();
    $dir = $rover->setDirection('e');
    $x = $rover->setX(3);
    $forward = $rover->forward();
    $this->assertEquals($rover->x, 4);
  }

  public function testSetyDepuisNord()
  {
    $rover = new Rover();
    $dir = $rover->setDirection('n');
    $y = $rover->setY(1);
    $forward = $rover->forward();
    $this->assertEquals($rover->y, 0);
  }

  public function testSetyDepuisOuest()
  {
    $rover = new Rover();
    $dir = $rover->setDirection('w');
    $y = $rover->setY(3);
    $forward = $rover->forward();
    $this->assertEquals($rover->y, 3);
  }

  public function testBackward(){
    $rover = new Rover();
    $backward = $rover->backward();
    $this->assertEquals($rover->y, -1);
  }

  public function testBackwardavecSet(){
    $rover = new Rover();
    $dir = $rover->setDirection('w');
    $y = $rover->setY(3);
    $x = $rover->setX(3);
    $backward = $rover->backward();
    $this->assertEquals($rover->x, 4);
  }

  public function testBackwardavecSetx(){
    $rover = new Rover();
    $dir = $rover->setDirection('e');
    $x = $rover->setX(3);
    $backward = $rover->backward();
    $this->assertEquals($rover->x, 2);
  }

  public function testBackwardavecSetY(){
    $rover = new Rover();
    $dir = $rover->setDirection('s');
    $y = $rover->setY(5);
    $backward = $rover->backward();
    $this->assertEquals($rover->y, 4);
  }

  public function testDeBatard(){
    $rover = new Rover();
    $rover->forward();
    $rover->turnLeft();
    $rover->forward();
    $rover->turnRight();
    $rover->forward();
    $rover->forward();
    $rover->turnLeft();
    $rover->forward();

    $this->assertEquals($rover->x, 2);
    $this->assertEquals($rover->y, 3);
    $this->assertEquals($rover->direction, "e");
  }

}
