<?php 

//$_GET
//$_POST




include('config.php');

if( isset($_POST['do_post']) )
{
	$errors = array();

	if( $_POST['experience-min'] == '' )
	{
		$errors[] = 'Введите первую цифру!';
	}
	if( $_POST['experience-max'] == '' )
	{
		$errors[] = 'Введите вторую цифру!';
	}
	if( $_POST['age-min'] == '' )
	{
		$errors[] = 'Введите начальный возраст!';
	}
	if( $_POST['age-max'] == '' )
	{
		$errors[] = 'Введите конечный возраст!';
	}
	if( empty($errors) )
	{
		//добавить коммент
	} else
	{
		echo $errors['0'];
	}
}



// echo "Ваш логин: " . $_POST['login'] . '<br />';
// echo "Ваш пароль: " . $_POST['password'];


// $login = $_POST['login'];
// $password = $_POST['password'];

// $count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");

// if( mysqli_num_rows($count) == 0)
// {
// 	echo "Вы не зарегестрированный пользователь!";
// } else 
// {
// 	echo 'Привет, '. $login . '!';
// }
