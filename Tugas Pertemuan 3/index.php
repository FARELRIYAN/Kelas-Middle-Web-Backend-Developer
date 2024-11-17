<?php
class Product {
    public $name;
    public $price;
    public $stock;

    public function __construct($name, $price, $stock) {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function showInformation() {
        echo "Nama: {$this->name}, Harga: {$this->price}, Stock: {$this->stock}\n";
    }
}

class ProductElectronic extends Product {
    public function calculateDiscount() {
        return $this->price * 0.5;
    }
}

class ProductFashion extends Product {
    public function calculateDiscount() {
        return $this->price - 5000;
    }
}

$laptop = new ProductElectronic("Laptop", 10000, 23);
$kaos = new ProductFashion("Kaos", 7000, 3);

$laptop->showInformation();
echo "Harga setelah diskon: " . $laptop->calculateDiscount() . "\n\n";

$kaos->showInformation();
echo "Harga setelah diskon: " . $kaos->calculateDiscount() . "\n";
?>
