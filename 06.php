<?php 

    include 'includes/header.php';

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
            return "The transport has " . $this->wheels . " wheels and a capacity for " . $this->capacity . " persons.";
        }

        public function getWheels() : int {
            return $this->wheels;
        }
    };

    include 'includes/footer.php';

?>