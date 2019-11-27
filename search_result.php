<!doctype html>
<html lang="en">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Поиск</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">

        <!-- Bootstrap core CSS -->
        <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="blog.css" rel="stylesheet">
        <link href="css\search_result_style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <header>
                <div class="collapse bg-dark wrapper" id="navbarHeader">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-md-7 py-4">
                                <h4 class="text-white">О нас</h4>
                                <p class="text-muted">Выставки BolgoLife</p>
                            </div>
                            <div class="col-sm-4 offset-md-1 py-4">
                                <h4 class="text-white">Контакты</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-white">Twitter</a></li>
                                    <li><a href="#" class="text-white">Facebook</a></li>
                                    <li><a href="#" class="text-white">Вконтакте</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar navbar-dark bg-dark shadow-sm">
                    <div class="container d-flex justify-content-between">
                        <a href="Main.html" class="navbar-brand d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
                            <strong>VolgoLife</strong>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </header>
            <div class="jumbotron p-4 p-md-5 "style="margin-top: 50px;">
                    <p class="lead font-italic my-3 h1">Результаты поиска</p>                   
            </div>
        </div>
        <main role="main" class="container">
            <div>
                <br/>
                <table class="table table-striped">
                    <tr>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Отзывы</th>
                    </tr>
                    <tr>
                        <?php   
                           require 'search_result_content.php';     
                        ?>
                    </tr>
                </table>               
                <br>
                <br>
            </div>
            <br/>
        </main><!-- /.container -->
        <footer class="blog-footer">
            <p align="center"><a href="Main.html">©VolgoLife</a></p>
            <p align="center">
                <a href="Calendar.php">Вернуться к началу</a>
            </p>
        </footer>
    </body>
</html>
