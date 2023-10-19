<?php 

    include 'includes/header.php';

    // Inherit Classes

    class Transport {
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
            return "The bike has " . $this->wheels . " wheels and capacity for " . $this->capacity . " person but doesn't use gasoline!";
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

    $bike = new Bike(2, 1);
    echo $bike->getInfo();
    echo $bike->getWheels();

    echo "<hr>";

    $car = new Car (4, 5, "Manual");
    echo $car->getInfo();
    echo $car->getTransmission();

    include 'includes/footer.php';

?>