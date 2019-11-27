<?php  
    require 'db.php';
    $id_name = trim($_REQUEST['id']);

    $query = $pdo->prepare('SELECT * FROM `advertisements` WHERE `id_advertisements`=:id');
    $query->execute([':id' => $id_name]);
    $row = $query->fetch(PDO::FETCH_OBJ);
                            
    $id_c = $row->id_customer;
    $sql = $pdo->prepare('SELECT * FROM `customers` WHERE `id_customer`=:id');
    $sql->execute([':id' => $id_c]);
    $row2 = $sql->fetch(PDO::FETCH_OBJ);

    echo '<th>'.$row->name.'</th>
    <th>Цена: '.$row->price.'
    <br>Описание: '.$row->description.'
    <br>E-mail: '.$row->email.'
    <br>Время выполнения: '.$row->leadtime.'</th>
    <th>'.$row2->review.'
    <br>'.$row2->assessment.'
    <br><img src="' . $row2->img . '" alt="фото"/></th>';
                            
?>
