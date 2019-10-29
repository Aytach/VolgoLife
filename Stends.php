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
    <title>Stends</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
     .h1{
      text-align: center;
     }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
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
    <div class="col-md-12 px-23">
      <h1 class="display-6 font-italic h1">Стенды выставки таблички</h1>
      <p class="lead my-3 h1">Изготовление информационных стендов в Волгограде</p>
      <center><a class="btn btn-sm btn-outline-secondary" href="AddAdvertisement.php">Добавить обьявление</a></center>
  </div>
    </div>


<main role="main" class="container">

  <div class="col-md-12 px-23">
    <p>Одной из деятельностей "VolgoLife" является размещение (обслуживание) заказов по изготовлению стендов. На нашем сайте вы можете оставить обьявление о своей компании по изготовлению различных стендов и носителей, а также просмотреть размещенные обьявления и заказать работу.</p>

    <?php
    
    $link = mysqli_connect('localhost', 'root', '', 'volgolife');
    mysqli_query($link, "SET NAMES utf8");
    if(mysqli_connect_errno())
    {
      echo 'Ошибка в подключении к базе данных ('.mysqli_connect_errno().'): '.mysqli_connect_error();
      exit();
    }

    function get_posts()
    {
      global $link;

      $sql = "SELECT * FROM `advertisements`";

      $result = mysqli_query($link, $sql);

      $posts = mysqli_fetch_all($result, 1);

      return $posts;
    }
?>

<div class="col-md-9">
    <div class="paqe-header">
<h1>Все обьявления:</h1>
</div>

  <?php  $posts = get_posts(); ?>
<div class="row">
      <div class="col-md-9">
  <?php foreach($posts as $post)
        {
          echo '<h4>'.$post['name'].'</h4>
        <p>'
        .$post['description'].
        '</p>
        <p><a class="btn-info btn-sm" href="#">Заказать</a></p>
        <ul class="list-inline">
            <li>Цена: <i class="qlyphicon qlyphicon-list">'.$post['price'].'</i>руб</li>
            <li>Время выполнения: <i class="qlyphicon qlyphicon-calendar"></i>'.$post['leadtime'].'</li>
            <li>Наша почта: <i class="qlyphicon qlyphicon-calendar"></i>'.$post['email'].'</li>
        </ul><hr><br/>';
        }
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
