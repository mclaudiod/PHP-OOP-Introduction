<?php 
    declare(strict_types = 1);
    include 'includes/header.php';

    // ABSTRACTION

    // Define a class

    class Product {
        public $name;
        public $price;
        public $available;

        // Constructors

        // Functions inside a class are called methods

        public function __construct(string $name, int $price, bool $available)
        {
            $this->name = $name;
            $this->price = $price;
            $this->available = $available;
        }
    };

    $product = new Product("Tablet", 200, true);

    echo "<pre>";
    var_dump($product);
    echo "</pre>";

    $product2 = new Product("Curved Monitor", 300, true);

    echo "<pre>";
    var_dump($product2);
    echo "</pre>";

    // New and shorter syntax in PHP 8

    class Product2 {

        // Constructors

        // Functions inside a class are called methods

        public function __construct(public string $name, public int $price, public bool $available)
        {
        }

        public function showProduct() {
            echo "The Product is a " . $this->name . " and has a price of " . $this->price . " $";
        }
    };

    $product3 = new Product2("Tablet", 200, true);
    $product3->showProduct();

    echo "<pre>";
    var_dump($product3);
    echo "</pre>";

    $product4 = new Product2("Curved Monitor", 300, true);
    $product4->showProduct();

    echo "<pre>";
    var_dump($product4);
    echo "</pre>";

    include 'includes/footer.php';
?>