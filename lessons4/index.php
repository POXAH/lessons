<?php
class Product
{
    public $name;
    public $price;
    public $weight;

    public function __construct(string $name, float $price, float $weight)
    {
        $this->price = $price;
        $this->weight = $weight;
        $this->name = $name;
    }

    public function printInfoVAT(){
        echo "Продукт с наименованием: $this->name. При весе $this->weight грамм имеет цену $this->price руб.<br><br>";
    }

    public function printInfoWithoutVAT(){
        $this->price -= round($this->price /120 * 20);
        echo "Продукт с наименованием: $this->name. При весе $this->weight грамм имеет цену $this->price руб. без НДС<br><br>";
    }
}

$product1 = new Product('Хлеб', '25','350');
$product2 = new Product('Молоко', '40','800');
$product3 = new Product('Кола', '100','1000');
$product1->printInfoVAT();
$product1->printInfoWithoutVAT();
$product2->printInfoVAT();
$product2->printInfoWithoutVAT();
$product3->printInfoVAT();
$product3->printInfoWithoutVAT();

