<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <form action="reghelper.php" method="post">
    <label for="">ФИО</label>
        <input type="text" name="name" placeholder="Введите ваше ФИО">
    <label for="">логин</label>
        <input type="text" name="login" placeholder="Введите логин">
    <label for="">пароль</label>
        <input type="password" name="pass" placeholder="Введите пароль">
    <label for="">Подтвержение пароля</label>
        <input type="password" name="passcheck" placeholder="Введите пароль еще раз">
    <button type="submit">Войти</button>
    <p>Если у вас есть аккаунт- <a href="index.php">Регистрация</a></p>
    <br>
    <p class="msg">
       <? 
       echo $_SESSION['message'] ;
       unset( $_SESSION['message']);
       ?>
    </p>
    </form>
</body>
</html>