<!doctype html>
<html lang="ru">
<?php
session_start();
?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <head>
    	<link href="css\style_orders.css" rel="stylesheet">
        <meta charset="utf-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <title>Add orders</title>   
    </head>
    <div class="cont">
        <div class="well">
            <div >
                <script type="text/javascript" src="js\orders_validate.js"></script>
                
                <form class="d brd" novalidate name="Form"  onsubmit="return ValidateForm()" action="upload.php"method="post"  enctype='multipart/form-data'>
                    <br>
                    <h4 >Добавьте свой отзыв:</h4>
                    <br><br>
                    <label for="assessment">Оценка:</label>
                    <br>
                    <input type="text" name="assessment" value=""  placeholder="Ваша оценка:">
                    <br><br>
                    <label for="reviev">Отзыв:</label>
                    <br>
                    <input type="text" name="review" value=""  placeholder="Ваш отзыв:">
                    <br><br>
                    <label for="myFile">Фото готового стенда:</label>
                    <br>
                    <input type="file" name="myFile">
                    <br><br>
                    <input type="submit" name="upload" class="btn btn-success" value="Отправить">

                    <?php require 'orders_php.php'; ?>

                    <a href="Stends.php"  class="z btn btn-outline-secondary">Закрыть</a>	
                </form>
            </div>
        </div>
    </div>
</html>
