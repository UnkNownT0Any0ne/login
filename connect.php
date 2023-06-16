<?php
$connect = mysqli_connect('localhost', 'root', '', 'database');
if(!$connect){
 die('Не подлючаестя к БД'); 
}