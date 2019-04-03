<?
$difference = [
    'GET' => [
        'Видно в строке браузера',
        'Легко изменить',
        'Можно передавать пароли и прочее, но не безопасно',
        'Нельзя передать файлы'
    ],
    'POST' => [
        'Обрабатывается в скрипте',
        'Нельзя увидеть',
        'Можно более безопасно передать логин и пароль',
        'Можно передать файл'
    ]
];
echo '<pre>';
var_dump($difference);
var_dump($_GET);
var_dump($_POST);
echo '</pre>';

/*---------------------------------------*/
/* GET.Если введено хотя бы Имя, то строка отобразится*/
/*---------------------------------------*/ 
if (isset($_GET['name'])) :
    echo "Привет, меня зовут ".$_GET['name'].' '.$_GET['last_name'].', мой возраст - '.$_GET['age'].'. Мой пароль виден всем - '.$_GET['password'].'<br><br>';
endif;
/*---------------------------------------*/
/* POST.Если введено хотя бы Имя, то строка отобразится*/
/*---------------------------------------*/
if(isset($_POST['name'])):
    echo "Привет, а меня зовут ".$_POST['name'].' '.$_POST['last_name'].', мой возраст - '.$_POST['age'].'. B мой пароль никто не видит кроме скрипта - '.$_POST['password'].'<br><br>';
endif;
?>
<style>
   div {
    border: 1px solid #fff; 
    border-radius: 5px;
    display: inline-block;
   }
   input {
    margin: 0px 5px;
   }
  </style>

<!-- /*---------------------------------------*/
/* GET.При вводе пароля через GET мы его видим в строке*/
/*---------------------------------------*/ -->
<div>
    <form action="">
        <b>GET</b>
        <p><input type="text" name="last_name" placeholder="Фамилия"></p>
        <p><input type="text" name="name" placeholder="Имя"></p>
        <p><input type="text" name="age" placeholder="Возраст"></p>
        <p><input type="password" name="password" placeholder="Пароль"></p>
        <input type="submit" value="Отправить">
    </form>
</div>


<!-- /*---------------------------------------*/
/* POST.При вводе пароля через POST мы его НЕ видим в строке*/
/*---------------------------------------*/ -->
<div>
    <form action="" method="POST" >
        <b>POST</b>
        <p><input type="text" name="last_name" placeholder="Фамилия"></p>
        <p><input type="text" name="name" placeholder="Имя"></p>
        <p><input type="text" name="age" placeholder="Возраст"></p>
        <p><input type="password" name="password" placeholder="Пароль"></p>
        <input type="submit" value="Отправить">
    </form>
</div>