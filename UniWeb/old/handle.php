<?php 

//$_GET
//$_POST


/*echo "Ваш логин: " . $_POST['login'] . '<br />';
echo "Ваш пароль: " . $_POST['password'];*/

include('includes/db.php');


$login = $_POST['login'];
$password = $_POST['password'];

$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");

if( mysqli_num_rows($count) == 0)
{
	echo "Вы не зарегестрированный пользователь!";
} else 
{
	echo 'Привет, '. $login . '!';
}
