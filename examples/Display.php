<?php
namespace Animal
class Display
{
  public function outputSound()
  {
    $dog = new Dog();
    echo $dog->returnSound();
  }
}
?>
