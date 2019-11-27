<?php

session_start();

require_once 'db.php';

if (isset($_POST['edit'], $_POST['email'], $_POST['leadtime'], $_POST['description'], $_POST['price'], $_POST['name'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $email = $_POST['email'];
    $leadtime = $_POST['leadtime'];

    $data = [
        'name' => $name,
        'price' => $price,
        'description' => $description,
        'email' => $email,
        'leadtime' => $leadtime,
        'id' => $id,
    ];

    $sql = "UPDATE advertisements SET name=:name, price=:price, description=:description, email=:email, leadtime=:leadtime WHERE id_advertisements=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($data);

    header("Location: Stends.php");
}

?> 
