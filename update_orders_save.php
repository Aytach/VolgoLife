<?php
session_start();
require_once 'db.php';

if((!file_exists($_FILES['myFile']['tmp_name']) || !is_uploaded_file($_FILES['myFile']['tmp_name'])) && isset($_POST['assessment'], $_POST['review'], $_POST['edit']))
{
    $id_a = $_POST['id'];

    if ($_SERVER['REQUEST_METHOD'] == "POST") 
    {
        if (isset($_POST['edit'], $_POST['assessment'], $_POST['review'])) 
        {
            //перезапишем customers
            $assessment = $_POST['assessment'];
            $review = $_POST['review'];

            $data = [
                'assessment' => $assessment,
                'review' => $review,
                'id' => $id_a,
            ];

            $sql = "UPDATE customers SET assessment=:assessment, review=:review WHERE id_customer=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);

            header("Location: Stends.php");
        }
    }
}
//файл тоже меняется

if ((file_exists($_FILES['myFile']['tmp_name']) || is_uploaded_file($_FILES['myFile']['tmp_name'])) && isset($_POST['assessment'], $_POST['review'], $_POST['edit'])) 
{
    $id_a = $_POST['id'];

    define("UPLOAD_DIR", "uploads /");

    $myFile = $_FILES["myFile"];

    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo "<p>Произошла ошибка!</p>";// файл не загружен на сервер 0-нет ошибок
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

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['edit'], $_POST['assessment'], $_POST['review'])) {
            //перезапишем customers
            $assessment = $_POST['assessment'];
            $review = $_POST['review'];

            $data = [
                'assessment' => $assessment,
                'review' => $review,
                'img' => $path,
                'id' => $id_a,
            ];

            $sql = "UPDATE customers SET assessment=:assessment, review=:review, img=:img WHERE id_customer=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);

            header("Location: Stends.php");
        }
    }
}
?>
