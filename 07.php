<?php

    include 'includes/header.php';

    // POLYMORPHISM

    // Interface

    // Is like a blueprint to know which methods a class has to have and what they have to return

    interface TransportInterface {
        public function getInfo() : string;
        public function getWheels() : int;
    };

    class Transport implements TransportInterface {
        public function __construct(protected int $wheels, protected int $capacity)
        {
            
        }

        public function getInfo() : string {
            return "The transport has " . $this->wheels . " wheels and capacity for " . $this->capacity . " persons.";
        }

        public function getWheels() : int {
            return $this->wheels;
        }
    };

    class Car extends Transport implements TransportInterface {
        public function __construct(protected int $wheels, protected int $capacity, protected string $color)
        {
            
        }

        public function getInfo() : string {
            return "The car has " . $this->wheels . " wheels, capacity for " . $this->capacity . " persons and is " . $this->color . ".";
        }

        public function getColor() : string {
            return "The color is " . $this->color . ".";
        }
    }

    echo "<pre>";
    var_dump($transport = new Transport(8, 20));
    var_dump($car = new Car(4, 5, "white"));
    echo $transport->getInfo();
    echo "<br>";
    echo $car->getInfo();
    echo "<br>";
    echo $car->getColor();
    echo "</pre>";

    include 'includes/footer.php';

?>