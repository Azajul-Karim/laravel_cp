<?php



class Driver{
  protected Vehicle $vehicle;

  function __construct(Vehicle $vehicle){
    $this->vehicle = $vehicle;
  }

  function startRide(){
    $this->vehicle->start();
  }
}

class Vehicle{
 public Engine $engine;

  function __construct(Engine $engine){
    $this->engine = $engine;
  }
  
}

class Engine{
 
}