<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/auth.css">
    <title>Форма регистараций</title>
</head>
<body>
<div class="container mt-4">   
    <?php
    if($_COOKIE['user'] == ''):
    ?>
    <div class="row">
        <div class="col">
        <h1>Регистарация</h1>
            <form action="./validation-form/check.php" method="post">
                <input type="text" class="form-control" placeholder="Введите логин" name="login" id="login">
                <input type="text" class="form-control" placeholder="Введите имя" name="name" id="name">
                <input type="password" class="form-control" placeholder="Введите пароль" name="pass" id="pass">
                <button class="btn btn-primary" type="submit">Зарегистрироваться</button>
            </form>
        </div>

        <div class="col">
        <h1>Авторизация</h1>
            <form action="./validation-form/auth.php" method="post">
                <input type="text" class="form-control" placeholder="Введите логин" name="login" id="login">
                <input type="password" class="form-control" placeholder="Введите пароль" name="pass" id="pass">
                <button class="btn btn-primary" type="submit">Авторизоваться</button>
            </form>
        </div>
        <?php else: 
            header("Location:./pages/home.php");
         endif;?>
    </div>
</div>
</body>
</html>