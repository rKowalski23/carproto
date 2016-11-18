<?php

abstract class CarPrototype {
    protected $make;
    protected $model;
    abstract function __clone();
    function getMake() {
        return $this->make;
    }
    function setMake($make_In) {
        $this->make = $make_In;
    }
    function getModel() {
        return $this->model;
    }
}

class ChallengerPrototype extends CarPrototype {
    function __construct() {
        $this->model = 'Challenger';
    }
    function __clone() {
    }
}

class CamaroPrototype extends CarPrototype {
    function __construct() {
        $this->model = 'Camaro';
    }
    function __clone() {
    }
}

  $challengerProto = new ChallengerPrototype();
  $camaroProto = new CamaroPrototype();

  $car1 = clone $challengerProto;
  $car1->setMake('Dodge');
  writeln('Car 1 Make: '.$car1->getMake());
  writeln('Car 1 Model: '.$car1->getModel());
  writeln('');

  $car2 = clone $camaroProto;
  $car2->setMake('Chevrolet');
  writeln('Car 2 Make: '.$car2->getMake());
  writeln('Car 2 Model: '.$car2->getModel());
  writeln('');

  $car3 = clone $challengerProto;
  $car3->setMake('Dodge');
  writeln('Car 3 Make: '.$car3->getMake());
  writeln('Car 3 Model: '.$car3->getModel());
  writeln('');

  function writeln($line_in) {
    echo $line_in."<br/>";
  }

?>