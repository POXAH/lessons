<?php
/*Абстрактный класс по которому нельзя создать объект, только наследовать*/
abstract class Product implements iSquare, iShelfLife, iPackaging
{
    protected $name;
    protected $price;
    protected $weight;
    public $inclededVAT;
    private $priceWithoutVAT;
    /*статическое свойство счетчика*/
    public static $counter = 0;
    public static $companyName = 'Devlopix';
    const YEAR_START = 2016;

    /*Вызов функции при конструировнии*/
    public function __construct(string $name, float $price, float $weight, int $vat = 20, bool $inclededVAT = true)
    {
        $this->weight = $weight;
        $this->name = $name;
        $this->inclededVAT = $inclededVAT;
        $this->priceWithoutVAT = ($inclededVAT) ? $price - round($price/(100+$vat) * $vat) : $price;
        $this->price = ($inclededVAT) ? $price : round($price+$price*$vat/100);
        self::$counter++;
    }

    public static function showCompanyInfo()
    {
        echo 'Компания ' . self::$companyName . ' основана в ' . self::YEAR_START . ' году. <br>';
    }

    /*.............................*/
    /*Функции заданные через интерфейс и объявленные внутри класса*/
    public function size($value)
    {
        echo "Размеры коробки с продуктом $value<br>";
    }

    public function date($dateStart, $dateEnd)
    {
        return "{$dateStart} - {$dateEnd}<br>";
    }
    public function typePackaging($text)
    {
        echo "Тип упаковки для хранения $text<br>";
    }
    /*.............................*/
}

interface iSquare
{
    public function size($value);
}

interface iShelfLife
{
    public function date($dateStart, $dateEnd);
}

interface iPackaging
{
    public function typePackaging($text);
}

class Chocolate extends Product
{
    /*.............................*/
    public function date($dateStart, $dateEnd)
    {
        return parent::date($dateStart, $dateEnd); // TODO: Change the autogenerated stub
    }

    public function size($value)
    {
        parent::size($value); // TODO: Change the autogenerated stub
    }

    public function typePackaging($text)
    {
        parent::typePackaging($text); // TODO: Change the autogenerated stub
    }
    /*.............................*/
    /*СЕТЕР*/
    public function __set($name, $value)
    {
        echo "Вы пытаетесь записать $value в недоступное свойство шоколада $name<br>";
    }

}


class Candy extends Product
{
    /*.............................*/
    public function date($dateStart, $dateEnd)
    {
        return parent::date($dateStart, $dateEnd); // TODO: Change the autogenerated stub
    }

    public function size($value)
    {
        parent::size($value); // TODO: Change the autogenerated stub
    }
    public function typePackaging($text)
    {
        parent::typePackaging($text); // TODO: Change the autogenerated stub
    }
    /*.............................*/

    /*ГЕТЕР*/
    public function __get($name)
    {
        echo "Вы пытаетесь вызвать <b>недоступное</b> свойство $name<br>";
    }
}

/**/
$product1 = new Chocolate('Mars', '53','95', '250');
$product1->timer = 50;


$product2 = new Candy('Хлеб', '25','350');
$product2->test;

$product2->size(50);
echo $product2->date('19.02.2018', '20.03.2020');
$product2->typePackaging("Без упаковки");


