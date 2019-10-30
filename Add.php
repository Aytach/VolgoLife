<?php
    if (isset($_POST['add']))
    {
        if($_POST['security'] == md5('AddAdvertisement.php'.'Add.php')) 
        {
            $name = htmlspecialchars($_POST['name']);
            $price = htmlspecialchars($_POST['price']);
            $description = htmlspecialchars($_POST['description']);
            $email = htmlspecialchars($_POST['email']);
            $leadtime = htmlspecialchars($_POST['leadtime']);

            $mysqli = new mysqli('localhost', 'root', '', 'volgolife');
            if($mysqli->connect_errno)
            {
              echo 'Ошибка в подключении к базе данных ('.$mysqli->connect_errno().'): '.$mysqli->connect_error();
              exit();
            }

            $result = $mysqli->query( "INSERT INTO `advertisements` ( `name`, `price`, `description`, `leadtime`, `email`) VALUES ( '$name', '$price', '$description', '$leadtime', '$email')");

            if($result == 'true')        
                header("Location: Stends.php" );
            else {
                echo "Ошибка при добавлении!";
                header("Location: AddAdvertisement.php" );
            }
        } 
        else die('Не туда попали!');   	   
    }
?> 
