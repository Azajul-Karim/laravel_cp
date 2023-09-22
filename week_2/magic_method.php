<?php
class Person
{

  public function __construct()
  {
    echo "I am a constructor" . "\n";
  }

  function __call(String $name, array $arguments)
  {
    var_dump($name, $arguments);
  }

  function __callStatic($name, $arguments)
  {
    var_dump($name, $arguments);
  }

  function walk()
  {
    echo "I am walking" . " \n";
  }

  function __destruct()
  {
    echo "I am a destructor" . "\n";
  }
}
$person = new Person();
$person->walk();
$person->run(10, 20);
Person::fly(10, 20);
