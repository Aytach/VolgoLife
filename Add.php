<?php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['add'], $_POST['email'], $_POST['leadtime'], $_POST['description'], $_POST['price'], $_POST['name'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $email = $_POST['email'];
        $leadtime = $_POST['leadtime'];


        $sql = 'INSERT INTO advertisements(name, price, description, leadtime, email) VALUES(:name, :price, :description, :leadtime, :email)';

        $query = $pdo->prepare($sql); //выполняем команду

        $query->execute(['name' => $name, 'price' => $price, 'description' => $description, 'leadtime' => $leadtime, 'email' => $email]); //при выполнении(execute) устанавливаем значения в бд

        header("Location: Stends.php");
    }
}
?> 
