<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=client;", "root", "", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
} catch (PDOException $e) {
    die("Can not connect to database");
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $firstAndLastName = $_POST['firstAndLastName'];
    $companyName = $_POST['companyName'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $student = $_POST['student'];

    $sql = "INSERT INTO client (firstAndLastName, companyName, email, number, student) VALUES ('$firstAndLastName', '$companyName', '$email', '$number', '$student')";
    if($pdo->exec($sql) > 0) {
        header("Location: success.php");
        die();
    } else {
        header("Location: failed.php");
        die();
    }

} else {
    header("Location: index.html");
    die();
}



?>

