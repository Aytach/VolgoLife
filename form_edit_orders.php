<?php
session_start();
  require_once 'db.php';

  $id_editc = trim($_REQUEST['id']);

  $sql = $pdo->prepare('SELECT * FROM `customers` WHERE `id_customer` = :id');
  $sql->execute([':id' => $id_editc]);
  $data = $sql->fetch(PDO::FETCH_OBJ);


  echo '<form class="d brd" novalidate name="Form"  onsubmit="return ValidateForm()" action="update_orders_save.php"method="post" enctype="multipart/form-data">
  <br>
  <h4>Добавьте изменения:</h4>                  
  <br>
  <label for="assessment">Оценка:</label>
  <br>
  <input type="text" name="assessment" value="' . $data->assessment . '"  placeholder="Ваша оценка:">
  <br><br>
  <label for="reviev">Отзыв:</label>
  <br>
  <input type="text" name="review" value="' . $data->review . '"  placeholder="Ваш отзыв:">
  <br><br>
  <label for="myFile">Фото готового стенда:</label>
  <br>
  <img src="' . $data->img . '" alt="фото"/>
  <input type="file" name="myFile" value="">
  <br><br>
  <input type="submit" name="edit" class="btn btn-success" value="Изменить">
  <input type="hidden" name="id" id="id" value="' . $id_editc . '">
  </form>';
?>
