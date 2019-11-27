<?php    
session_start();

$data = $_POST;
$errors = array();

require 'db.php';

    if (isset($data['go_signup'], $data['login'], $data['password1'], $data['password2'])) 
    { 
        $login = $data['login'];
        $password1 = $data['password1']; 
        $password2 = $data['password2']; 

        if ($login == '') 
        { 
            $errors[] = "Введите логин!";
        } 
        if ($password1 =='') 
        { 
            $errors[] = "Введите пароль!";
        } 
        if($password1 != $password2)
        {
            $errors[] = "Повторный пароль введен не верно!";
        }
        $query = $pdo->prepare('SELECT id_users FROM `users` WHERE `login`=:login');
        $query->execute([':login' => $login]);
        if ($row = $query->fetch(PDO::FETCH_OBJ))
        {
            $errors[] = 'Пользователь с таким логином уже существует!';
        }

        if (empty($errors))// not errors
        {
            $password = password_hash($password1, PASSWORD_DEFAULT);//парольв шифрованном виде

            $query = $pdo->prepare('INSERT INTO users(login, password) VALUES(:login, :password)'); //выполняем команду

            $query->execute(['login' => $login, 'password' => $password]); //при выполнении(execute) устанавливаем значения в бд
            echo '<div style="color:green;">Вы успешно зарегистрированы!</div><hr>';
        }
        else
        {
           echo '<div id="errors" style="color:red;">' .array_shift($errors). '</div><hr>';//выводим по одной ошибке из массива
        }
    }
?>
