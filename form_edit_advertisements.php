<?php
  require_once 'db.php';

  $id_edit = trim($_REQUEST['id']);

  $sql = $pdo->prepare('SELECT * FROM `advertisements` WHERE `id_advertisements` = :id');
  $sql->execute([':id' => $id_edit]);
  $data = $sql->fetch(PDO::FETCH_OBJ);


  echo '<form novalidate name="myForm" action="update_page_text_save.php" onsubmit="return validateForm()" method="post" >
<br>
<h4>Добавьте изменения:</h4>
<br>
<label for="name">Название:</label>
<br>
<input type="text" name="name" value="' . $data->name . '"  placeholder="Введите ваше название товара" minlength="1" maxlength="255">
<br>
<label for="price">Стоимость:</label>
<br>
<input type="price" name="price" value="' . $data->price . '"  placeholder="Введите стоимость выполнение работы" minlength="1" maxlength="6">
<br>
<label for="description">Описание:</label>
<br>
<input type="text" name="description" value="' . $data->description . '"  placeholder="Введите короткое описание товара">
<br>
<label for="leadtime">Время выполнения:</label>
<br>
<input type="text" name="leadtime" value="' . $data->leadtime . '" placeholder="Введите время выполнения работы">
<br>
<label for="email ">E-mail:</label>
<br>
<input type="email" name="email" value="' . $data->email . '"  placeholder="Введите ваш E-mail">
<br>
<br>
<input type="submit" name="edit" id="click"  class="btn btn-success" value="Изменить"></input>
<input type="hidden" name="id" id="id" value="' . $id_edit . '"></p>
  </form>';
?>
