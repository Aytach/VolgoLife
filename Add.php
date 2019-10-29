<?php
    if (isset($_POST['add']))
    {
    	$name =$_POST['name'];
    	$price = $_POST['price'];
    	$description = $_POST['description'];
    	$email = $_POST['email'];
    	$leadtime = $_POST['leadtime'];

		$mysqli = new mysqli('localhost', 'root', '', 'volgolife');
		    if($mysqli->connect_errno)
		    {
		      echo 'Ошибка в подключении к базе данных ('.$mysqli->connect_errno().'): '.$mysqli->connect_error();
		      exit();
		    }

    	 $result = $mysqli->query( "INSERT INTO `advertisements` (`id`, `name`, `price`, `description`, `leadtime`, `email`) VALUES (NULL, '$name', '$price', '$description', '$leadtime', '$email')");

    	if($result == 'true')        
    		    header("Location: Stends.php" );
    	else 
    		echo "Ошибка при добавлении!";
    }

?> 
