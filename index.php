<?
$currentTimestamp = $_SERVER['REQUEST_TIME'];
$day = date("d",$currentTimestamp);
$year = date("Y",$currentTimestamp);
$hour = date("H",$currentTimestamp);
$minutes = date("i",$currentTimestamp);
$seconds = date("s",$currentTimestamp);



if ($minutes%3 == 0) {
    $width = $hour*20;
    $hight = $day**3;
    $red = 255;
    $green = 0;
    $blue = 0;
} elseif($minutes%2 == 0) {
    $width = floor(sqrt($year))*5;
    $hight = floor(sqrt($year))*5;
    $red = 255;
    $green = 255;
    $blue = 0;
} else {
    $width = $minutes*$seconds;
    $hight = $hour**2;
    $red = 0;
    $green = 255;
    $blue = 0;
}

$image = imagecreatetruecolor($width, $hight);
$color = imagecolorallocate($image, $red, $green, $blue);
imagefilledrectangle($image,0,0,$width,$hight,$color);

header('Content-Type: image/jpeg');

imagejpeg($image);
imagedestroy($image);