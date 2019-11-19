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
        <title>EditAdvertisements</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">

        <!-- Bootstrap core CSS -->
        <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <link href="blog.css" rel="stylesheet">
        <style type="text/css">
            input,textarea
            {
                width: 600px;
                margin: 10 10 10 0;
            }
        </style>
    </head>
    <div class="container">
        <div class="well">
            <div >
                <script type="text/javascript">
                    function ValidateForm() {

                        var x = document.forms["Form"]["assessment"].value;
                        if (x == "")
                        {
                            alert("Необходимо ввести оценку!");
                            return false;
                        }
                        var adr_pattern = /^([1-9]|10)$/;
                        if (adr_pattern.test(x) == false)
                        {
                            alert("Вы ввели некорректую оценку! Введите оценку от 1 до 10.");
                            return false;
                        }
                        var x = document.forms["Form"]["review"].value;
                        if (x == "")
                        {
                            alert("Необходимо ввести отзыв!");
                            return false;
                        }
                    }
                </script>
                <?php
                  require 'form_edit_orders.php';
                ?>
            </div>
        </div>
    </div>
</html>
