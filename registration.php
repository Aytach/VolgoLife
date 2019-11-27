<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <head>
    <title>Авторизация</title>

<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
   
<link href="blog.css" rel="stylesheet">
<link href="css\registration_style.css" rel="stylesheet">
</head>

 <body>
 	 <div class="login">
 	 	
        <script type="text/javascript" src="js\registration_validate.js"></script>
		
  	<form id="myForm" action="login2.php" novalidate onsubmit="return validateForm()" method="post">  
  		<h3 style="text-align: center;">Регистрация</h3>
  		<label for="login">Введите ваш логин:</label>
		<br>
        <input class="field" placeholder="Логин" autofocus="" name="login" type="text" value="<?php echo @$data['login']; ?>">
        <br>
        <label for="password1">Введите ваш пароль:</label>
		<br>
        <input class="field" placeholder="Пароль"  name="password1" type="password" value="<?php echo @$data['password1']; ?>">
        <br>
        <label for="password2">Введите ваш пароль еще раз:</label>
		<br>
        <input class="field" placeholder="Пароль"  name="password2" type="password" value="<?php echo @$data['password2']; ?>">
        <br>
        <input name="go_signup" value="Регистрация" type="submit"><br>
    </form>
  </div>

 </body>
</html>
