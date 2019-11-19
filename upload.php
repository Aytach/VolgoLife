<?php

if ((file_exists($_FILES['myFile']['tmp_name']) || is_uploaded_file($_FILES['myFile']['tmp_name'])) && isset($_POST['assessment'], $_POST['review'], $_POST['upload'])) {
    $id_a = $_POST['id'];

    define("UPLOAD_DIR", "uploads /");

    $myFile = $_FILES["myFile"];

    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo "<p>Произошла ошибка!</p>";
        exit;
    }
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

    $i = 0;
    $parts = pathinfo($name); //пути к файлу
    while (file_exists(UPLOAD_DIR . $name)) { //Проверяет существование указанного файла или каталога
        $i++;
        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');

    $img = $_FILES['myFile']['name'];

    // получаем расширение загруженного файла
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    if (!in_array($ext, $valid_extensions)) {
        echo "Не разрешенный тип файла!!!";
        exit;
    }
    //Если размер файла превышает 500 КБ
    if ($_FILES["myFile"]["size"] > 500000) {
        echo "?звините, ваш файл слишком большой.";
        exit;
    }

    $path = 'uploads/';

    $path = $path . strtolower($name); //Преобразует строку в нижний регистр
    //сохраняем файл из временного каталога
    //перемешаем файл в его окончательный каталог
    $success = move_uploaded_file($myFile["tmp_name"], UPLOAD_DIR . $name);

    if (!$success) {
        echo "<p>Не удалось сохранить файл.</p>";
        exit;
    }

    require_once 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['upload'], $_POST['assessment'], $_POST['review'])) {
            //запишем customers
            $assessment = $_POST['assessment'];
            $review = $_POST['review'];

            $sql = 'INSERT INTO customers(assessment, review, img) VALUES(:assessment, :review, :img)';
            $query = $pdo->prepare($sql); //выполняем команду
            $query->execute(['assessment' => $assessment, 'review' => $review, 'img' => $path]);

            //запишем id в advertisements
            $newid = $pdo->lastInsertId();
            $sql = 'UPDATE advertisements SET id_customer=:newid WHERE id_advertisements=:id';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['newid' => $newid, 'id' => $id_a]);

            header("Location: Stends.php");
        }
    }
}
?>
