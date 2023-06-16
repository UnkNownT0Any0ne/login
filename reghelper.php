<?php
session_start();
require_once 'connect.php';
$name=$_POST['name'];
$login=$_POST['login'];
$pass=$_POST['pass'];
$passcheck=$_POST['passcheck'];
if($pass === $passcheck){

$pass=md5($pass);
mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `password`) VALUES (NULL, '$name', '$login', '$pass')");
$_SESSION['message'] = 'Регистрация прошла успешна!';
header('location:index.php');

} else {
    $_SESSION['message'] = 'пароли не сповпадают';
    header('location:register.php');
}

?>
