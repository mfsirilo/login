<?php
session_start();
if(!$_SESSION['usuario']) {
	echo"Entrando no sistema";
	sleep(10);
	header('Location: /login/index.php');
	exit();
}?>