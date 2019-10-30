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
            
            require_once 'db.php';
            
            $result = mysqli_query($link, "INSERT INTO `advertisements` ( `name`, `price`, `description`, `leadtime`, `email`) VALUES ( '$name', '$price', '$description', '$leadtime', '$email')");

            if($result == 'true')        
                header("Location: Stends.php" );
            else {
                echo "Ошибка при добавлении!";
                header("Location: AddAdvertisement.php" );
            }
        } 
        else die('Не правильный вход!');   	   
    }
?> 
