<!doctype html>
<html lang="ru">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  
    <head>
        <meta charset="utf-8" /> 
        <title>Stends</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">

        <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        

        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">

        <link href="blog.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link href="css/style_Stends.css" rel="stylesheet">
        
        <!--ПОИСК-->
        <script type="text/javascript" src="js/stends_search_ajax.js">  </script>   

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
              <div class="form-group p-2">  
                <div class="input-group">

                <!-- ПОИСК-->
    
                  <span class="input-group-addon">Search </span>  
                  <input type="text" name="search" id="search_text" placeholder="Search by Advertisements Name" class="form-control"/>
                </div>  
              </div>  
              <br />  
              <div id="result"></div> 
              
            <div class="jumbotron p-2 p-md-5">
                <div class="col-md-12 px-23">
                 
                    <h1 class="display-6 font-italic h1">Стенды выставки таблички</h1>
                    <p class="lead my-3 h1">Изготовление информационных стендов в Волгограде</p>
                    <center><a class="btn btn-sm btn-outline-secondary" href="AddAdvertisement.php">Добавить обьявление</a></center>
                </div>
            </div>
            <main role="main" class="container">
                <div class="col-md-12 px-23">
                    <p>Одной из деятельностей "VolgoLife" является размещение (обслуживание) заказов по изготовлению стендов. На нашем сайте вы можете оставить обьявление о своей компании по изготовлению различных стендов и носителей, а также просмотреть размещенные обьявления и заказать работу.</p>
                    <div class="col-md-9">
                        <div class="paqe-header">
                            <br>
                            <h1 class="h1">Все обьявления:</h1><hr><br/>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                              <?php 
                                require 'output.php';
                              ?>                          
                            </div>
                        </div>
                        <br/>
                    </div>
                </div>
            </main>
            <footer class="blog-footer">
                <p align="center"><a href="Main.html">©VolgoLife</a></p>
                <p align="center">
                    <a href="Stends.php">Вернуться к началу</a>
                </p>
            </footer>
    </body>
</html>
