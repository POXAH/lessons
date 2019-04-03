<?
if (!empty($_POST['age'])) {
    $birthDay = new DateTime($_POST['age']);
    $today = new DateTime(date('Y-m-d'));
    $difference = date_diff($birthDay, $today);
    echo "Полных лет - " . $difference->format('%Y');
}

?>


<!-- /*---------------------------------------*/
/* POST.При вводе пароля через POST мы его НЕ видим в строке*/
/*---------------------------------------*/ -->
<div>
    <form action="" method="POST" >
        <b>POST</b>
        <p><input type="date" name="age" placeholder="Год рождения"></p>
        <input type="submit" value="Отправить">
    </form>
</div>