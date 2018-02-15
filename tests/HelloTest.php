<?php

require __DIR__ .'/../src/Hello.php';
use PHPUnit\Framework\TestCase;
/**
 *
 */
class HelloTest extends TestCase
{
  public function testOne()
  {
      $this->assertTrue(true);
  }

  public function testHelloExiste(){
    $hello = new Hello('chouchou');

    $this->assertEquals($hello->greetings, 'bonjour cher chouchou');
  }

  public function testHelloreturnUserName(){
    $hello = new Hello('Tramber');

    $this->assertEquals($hello->greetings, 'bonjour cher Tramber');
  }

  public function testGetName(){
    $hello = new Hello("pomme");
    $name = $hello->getName();
    $this->assertEquals($name, 'pomme');
  }

  public function testGetNameTwo(){
    $hello = new Hello("fromage");
    $name = $hello->getName();
    $this->assertEquals($name, 'fromage');
  }

  public function testSetName(){
    $hello = new Hello("fromage");
    $name = $hello->getName();
    $name = $hello->setName('poisson');
    $this->assertEquals($name, 'poisson');
  }


}
