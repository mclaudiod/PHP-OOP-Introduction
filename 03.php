<?php 
    declare(strict_types = 1);

    include 'includes/header.php';

    // Static Methods

    class Product {

        public $img;
        public static $placeholderImg = "Image.jpg";
        
        public function __construct(protected string $name, public int $price, public bool $available, string $img)
        {
            if($img) {
                self::$placeholderImg = $img;
            }
        }

        public static function obtainImgProduct() {
            return self::$placeholderImg;
        }

        public static function obtainProduct() {
            echo "Obtaining data of the Product...";
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

    echo Product::obtainProduct();
    $product = new Product("Tablet", 200, true, "");
    $product->showProduct();
    echo $product->getName();
    $product->setName("New Name");
    echo Product::obtainImgProduct();

    echo "<pre>";
    var_dump($product);
    echo "</pre>";

    $product2 = new Product("Curved Monitor", 300, true, "CurvedMonitor.jpg");
    $product2->showProduct();
    echo Product::obtainImgProduct();

    echo "<pre>";
    var_dump($product2);
    echo "</pre>";

    include 'includes/footer.php';
?>