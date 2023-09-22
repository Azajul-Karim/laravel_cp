<?php

//Composition
//Object -> compose
//Vehicle(has a) -> Engine
class Vehicle{
  private $engine;
  
  function start(){
   $this->engine->start();
  } 
}

class Engine{
  private $model;
  private $brand;

  function start(){
    echo "Engine started";
  }
}

$engine = new Engine();
$vehicle = new Vehicle();
$vehicle->start();


//Inheritance
//Object -> is a
//Mobile -> AppleMobile -> Iphone

class Mobile{

}

class AppleMobile extends Mobile{

}

class Iphone extends AppleMobile{

}

//Favour Composition Over Inheritance

class Book{
  private $numberOfPages;
  function purchase(){

  }

  function lend(){

  } 
}

class AudioBook extends Book{
  
}

class EBook extends Book{
  

}