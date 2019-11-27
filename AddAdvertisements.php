<!doctype html>
<html lang="en">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <head>
        <meta charset="utf-8" /> 
    <html lang="ru">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Add advertisements</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">

        <!-- Bootstrap core CSS -->
        <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <link href="blog.css" rel="stylesheet">
        <link href="css\addadvertisements_style.css" rel="stylesheet">
    </head>
    <div class="cont">
        <div class="well">
            <div >
                <script type="text/javascript"src="js\addadvertisements_validate.js"></script>

                <form class = "brd" novalidate name="myForm" action="Add.php" onsubmit="return validateForm()" method="post" >
                    <br>
                    <h4>Добавьте свое объявление!</h4>
                    <br>
                    <label for="name" class="f">Название:</label>
                    <br>
                    <input type="text" name="name" value=""  placeholder="Введите ваше название товара" minlength="1" maxlength="255">
                    <br>
                    <label for="price" class="f">Стоимость:</label>
                    <br>
                    <input type="price" name="price" value=""  placeholder="Введите стоимость выполнение работы" minlength="1" maxlength="6">
                    <br>
                    <label for="description" class="f">Описание:</label>
                    <br>
                    <input type="text" name="description" value=""  placeholder="Введите короткое описание товара">
                    <br>
                    <label for="leadtime" class="f">Время выполнения:</label>
                    <br>
                    <input type="text" name="leadtime" value="" placeholder="Введите время выполнения работы">
                    <br>
                    <label for="email" class="f">E-mail:</label>
                    <br>
                    <input type="email" name="email" value=""  placeholder="Введите ваш E-mail">
                    <br>
                    <br>
                    <input type="submit" name="add" id="click"  class="btn btn-success" value="Отправить"></input>
                    <a href="Stends.php"  class="z btn btn-outline-secondary">Закрыть</a>

                </form>
            </div>
        </div>
    </div>
</html>
