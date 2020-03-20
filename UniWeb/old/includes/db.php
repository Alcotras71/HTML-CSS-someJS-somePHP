<?php

$connection = mysqli_connect('localhost', 'root', '', 'uniweb');

if( $connection == false) {
	echo "Не удалось подключиться к базе данных! <br/>";
	echo mysqli_connect_error();
	exit();
}

?>