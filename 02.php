<?php 
    declare(strict_types = 1);

    include 'includes/header.php';

    // ENCAPSULATION

    class Product {

        // Public - It can be accesses and modified everywhere and anytime (class and object)

        // Protected - It can only be accessed and modified in the class

        // Private - Only members of the same class can access to it

        public function __construct(protected string $name, public int $price, public bool $available)
        {
        }

        public function showProduct() : void {
            echo "The Product is a " . $this->name . " and has a price of " . $this->price . " $";
        }

        public function getName() : string {
            return $this->name;
        }

        public function setName(string $name) {
            $this->name = $name;
        }
    };

    $product = new Product("Tablet", 200, true);
    $product->showProduct();
    echo $product->getName();
    $product->setName("New Name");


    echo "<pre>";
    var_dump($product);
    echo "</pre>";

    $product2 = new Product("Curved Monitor", 300, true);
    $product2->showProduct();

    echo "<pre>";
    var_dump($product2);
    echo "</pre>";

    include 'includes/footer.php';
?>