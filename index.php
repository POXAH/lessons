<?
//Получаем время запуска
$currentTimestamp = $_SERVER['REQUEST_TIME'];
//Разбиваем время на части
$day = date("d",$currentTimestamp);
$year = date("Y",$currentTimestamp);
$hour = date("H",$currentTimestamp);
$minutes = date("i",$currentTimestamp);
$seconds = date("s",$currentTimestamp);


//проверяем кратность 3
if ($minutes%3 == 0) {
    $width = $hour*20;
    $hight = $day**3;
    $red = 255;
    $green = 0;
    $blue = 0;
} elseif($minutes%2 == 0) {
    //проверяем кратность 2
    $width = floor(sqrt($year))*5;
    $hight = floor(sqrt($year))*5;
    $red = 255;
    $green = 255;
    $blue = 0;
} else {
    //иначе
    $width = $minutes*$seconds;
    $hight = $hour**2;
    $red = 0;
    $green = 255;
    $blue = 0;
}
//создание изображения размерами вычисленными ранее
$image = imagecreatetruecolor($width, $hight);
//создание цвета
$color = imagecolorallocate($image, $red, $green, $blue);
//Рисование прямоугольника
imagefilledrectangle($image,0,0,$width,$hight,$color);

header('Content-Type: image/jpeg');

//вывод изображения в браузер
imagejpeg($image);
//уничтожение изображения
imagedestroy($image);