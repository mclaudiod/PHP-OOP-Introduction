<?php 

    include 'includes/header.php';

    // Abstract Classes

    // Are those that can't be instanced, only inherited

    abstract class Transport {
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

    class Bike extends Transport {
        public function getInfo() : string {
            return "The transport has " . $this->wheels . " wheels and capacity for " . $this->capacity . " person but doesn't use gasoline!";
        }
    };

    class Car extends Transport {
        public function __construct(protected int $wheels, protected int $capacity, protected string $transmission)
        {
            
        }

        public function getTransmission() : string {
            return $this->transmission;
        }
    };
    
    $transport = new Transport(1, 3);
    echo $transport->getInfo();

    echo "<hr>";

    $bike = new Bike(2, 1);
    echo $bike->getInfo();
    echo $bike->getWheels();

    echo "<hr>";

    $car = new Car (4, 5, "Manual");
    echo $car->getInfo();
    echo $car->getTransmission();

    include 'includes/footer.php';

?>