<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<body>
    <form action="loghelper.php" method="post">
    <label for="">логин</label>
        <input type="text" name="login" placeholder="Введите логин">
    <label for="">пароль</label>
        <input type="password" name="pass" placeholder="Введите пароль">
        <label for="">Подтвержение пароля</label>
        <input type="password" name="pass" placeholder="Введите пароль еще раз">
    <button type="submit">Войти</button>
    <p>У вас нет аккаунта - <a href="register.php">Зарегистрироваться</a></p>
    </form>

    <p class="msg">
       <? 
       echo $_SESSION['message'] ;
       unset( $_SESSION['message']);
       ?>
    </p>
    
</body>
</html>