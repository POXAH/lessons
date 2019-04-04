<?php
/*Абстрактный класс по которому нельзя создать объект, только наследовать*/
abstract class Product
{
    protected $name;
    protected $price;
    protected $weight;
    /*статическое свойство счетчика*/
    public static $counter = 0;

    /*Вызов функции при конструировнии*/
    protected function __construct(string $name, float $price, float $weight)
    {
        $this->price = $price;
        $this->weight = $weight;
        $this->name = $name;
        self::$counter++;
    }

    public function printInfoVAT()
    {
        echo "Продукт с наименованием: $this->name. При весе $this->weight грамм имеет цену $this->price руб.<br><br>";
    }

    public function printInfoWithoutVAT()
    {
        $this->price *= 0.8;
        echo "Продукт с наименованием: $this->name. При весе $this->weight грамм имеет цену $this->price руб. без НДС<br><br>";
    }
    /*абстрактный метод доступный только при наследовании*/
    abstract protected function showImage();
}


class Chocolate extends Product
{
    /*свойство доступное только в этом классе*/
    private $callories;

    public function __construct(string $name, float $price, float $weight, int $callories)
    {
        $this->callories = $callories;
        parent::__construct($name, $price, $weight);
    }
    /*объявленный абстрактный метод из родительского класса доступный для вызова извне*/
    public function showImage()
    {
        echo "<div style='width: 200px; height: 200px;'><img src='classic-choco.jpg' alt='Шоколад' width='200px'></div>";
    }
}


class Candy extends Product
{
    public function __construct(string $name, float $price, float $weight)
    {
        /*Вызов функции при конструировнии*/
        $this->showImage();
        parent::__construct($name, $price, $weight);
    }
    /*Переприсвоение с вызовом функции внутри*/
    public function printInfoVAT()
    {
        parent::printInfoVAT();
        $this->showImage();
    }
    /*объявленный абстрактный метод из родительского класса доступный только для дочерних классов*/
    protected function showImage()
    {
        echo "<div style='width: 100px; height: 100px;'>
                <img src='zhivinka_arbyz.jpg' alt='Конфета' width='100px'>
              </div>";
    }
}

/**/
$product1 = new Chocolate('Mars', '53','95', '250');
$product1->printInfoVAT(); //вызов метода класса присвоенного от родительского Product
$product1->showImage(); //вызов метода класса

$product2 = new Candy('Хлеб', '25','350');
$product2->printInfoVAT();

$product3 = new Chocolate('Alpen Gold','100', '120', '500');

/*При вызове статического свойства из любого дочернего получаем количество дочерних классов в продуктах*/
echo "{$product2::$counter} дочерних элемента";


