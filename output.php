<?php
require 'db.php';
$query = $pdo->query('SELECT a.id_advertisements,
                            a.price,
                            a.name,
                            a.description,
                            a.email,
                            a.leadtime,
                            a.id_customer,
                            customers.review as customersreview,
                            customers.assessment as customersassessment,
                            customers.img as customersimg 
                            from advertisements a
                            LEFT JOIN customers   customers on customers.id_customer = a.id_customer 
                            ORDER BY `id_advertisements` DESC');

while ($row = $query->fetch(PDO::FETCH_OBJ)) {//в row помешаем каждый отдельный ряд из таблицы как к элементам обьекта
    $id = $row->id_advertisements;
    $id_c = $row->id_customer;
    echo '<h4 class="elem">' . $row->name . '</h4>
          <p>'
    . $row->description .
    '</p>
          <ul class="list-inline">
              <li>Цена: <i class="qlyphicon qlyphicon-list">' . $row->price . '</i>руб</li>
              <li>Время выполнения: <i class="qlyphicon qlyphicon-calendar"></i>' . $row->leadtime . '</li>
              <li>Наша почта: <i class="qlyphicon qlyphicon-calendar"></i>' . $row->email . '</li>
          </ul>';
    echo '<p><a class="btn-info btn-sm" href="Delete.php?page=' . ($row->id_advertisements) . '">Удалить</a>

          <a href="Edit.php?id=' . ($id) . '" class="btn-info btn-sm">Редактировать</a>

          <a class="btn-info btn-sm f" href="orders.php?id=' . ($id) . '">Оставить отзыв</a></p>';
    if ($row->customersreview) {
        echo '<h6>Последний отзыв:</h6>
            <p>Отзыв: ' . $row->customersreview . '</p>
            <p>Оценка: ' . $row->customersassessment . ' из 10</p>
            <p>Фото результат:   <img src="' . $row->customersimg . '" alt="фото"/><br></p>';

        echo '<p><a href="EditOrders.php?id=' . ($id_c) . '" class="btn-info btn-sm">Редактировать отзыв</a></p>';
    }
    echo '<hr><br/>';
}
?>
