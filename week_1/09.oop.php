<?php
//Abstract class

abstract class Vehicle
{
  abstract public function getBaseFare(): int;
   

  abstract public function getPerkiloFare():int;
   

    public function getTotal(int $kilo)
    {
        return $this->getBaseFare() + ($kilo * $this->getPerkiloFare());
       
    }
}

class Car extends Vehicle
{
  public function getBaseFare(): int{
    return 100;
  }

  public function getPerkiloFare(): int{
    return 10;
  }
}

class Bike extends Vehicle
{
  public function getBaseFare(): int{
    return 50;
  }

  public function getPerkiloFare(): int{
    return 5;
  }
}

class CNG extends Vehicle
{
  public function getBaseFare(): int{
    return 30;
  }

  public function getPerkiloFare(): int{
    return 3;
  }
}

$car = new Car();
$total = $car->getTotal(10);
echo "Total fare for car: $total \n";


//interface
