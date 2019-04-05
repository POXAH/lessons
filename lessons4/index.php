<?php
class Product
{
    public $name;
    public $price;
    public $weight;
    public $inclededVAT;
    private $priceWithoutVAT;

    public function __construct(string $name, float $price, float $weight, int $vat = 20, bool $inclededVAT = true)
    {
        $this->weight = $weight;
        $this->name = $name;
        $this->inclededVAT = $inclededVAT;
        $this->priceWithoutVAT = ($inclededVAT) ? $price - round($price/(100+$vat) * $vat) : $price;
        $this->price = ($inclededVAT) ? $price : round($price+$price*$vat/100);
    }

    public function printInfoVAT(){
        echo "Продукт с наименованием: $this->name. При весе $this->weight грамм имеет цену $this->price руб.<br><br>";
    }

    public function printInfoWithoutVAT(){
        $this->price -= round($this->price /120 * 20);
        echo "Продукт с наименованием: $this->name. При весе $this->weight грамм имеет цену $this->priceWithoutVAT руб. без НДС<br><br>";
    }
}

$product1 = new Product('Хлеб', '25','350', 100, 0);
$product2 = new Product('Молоко', '40','800', 18);
$product3 = new Product('Кола', '100','1000', 20,0);
$product1->printInfoVAT();
$product1->printInfoWithoutVAT();
$product2->printInfoVAT();
$product2->printInfoWithoutVAT();
$product3->printInfoVAT();
$product3->printInfoWithoutVAT();

