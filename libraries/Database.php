<?php
class Dog
{
  public $colour = "green";

  public function bark()
  {
    echo "WOOF WOOF!";
  }
}

$dog = new Dog;

$dog->colour = "Green";
