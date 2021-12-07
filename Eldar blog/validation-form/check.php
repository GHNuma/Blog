<?php
$login=filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$name=filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5  || mb_strlen($login) > 90) {
    echo "Недопустимая длина логина";
    exit();
} else if(mb_strlen($name) < 3 || mb_strlen($name) > 50){   
    echo "Недопустимая длина имени";
    exit();
} else if(mb_strlen($pass) < 8 ){
    echo "Пароль должен состоять минимум из 8 символов";
    exit();
}

$pass = md5($pass."qwerty123");

require "../blocks/connect.php";


$mysql->query("INSERT INTO `users` (`name`, `login`, `password`) VALUES('$name', '$login', '$pass')");

$mysql->close();

header('Location: ../index.php');

?>