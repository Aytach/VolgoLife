<?php
require 'db.php';
session_start();

$data = $_POST;
if(isset($data['do_login'], $data['login'], $data['password']))
{
	$errors = array();

	$login = $data['login'];
    $password = $data['password']; 

    if ($login == '') 
    { 
        $errors[] = "Введите логин!";
    } 
    if ($password =='') 
    { 
        $errors[] = "Введите пароль!";
    } 

	$query = $pdo->prepare('SELECT * FROM users WHERE login=:log');
    $query->execute([':log' => $login]);
    $user = $query->fetch(PDO::FETCH_OBJ);
    if ($user)
    {
        if(password_verify($password, $user->password))// сравниваем
        {
        	//логиним пользователя
        	$_SESSION['logged_user'] = $user;
        	echo '<div style="color:green;">Вы авторизованы!<br/>Можете перейти в <a href="PersonalArea.php"> личный</a> кабинет!</div><hr>';
        }
        else
        {
            $errors[] = 'Неверно введен пароль!';
        }
    }
    else 
    {
        $errors[] = 'Пользователь с таким логином не существует!';
    }
    if (!empty($errors))//errors
    {
        echo '<div id="errors" style="color:red;">' .array_shift($errors). '</div><hr>';//выводим по одной ошибке из массива
    }
}

?>
