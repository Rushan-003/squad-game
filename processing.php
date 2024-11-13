<?php
    $name = $_POST['username'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    echo "$name <br> $email<br> $feedback";

$pdo = new PDO('mysql:host=MySQL-8.2;dbname=squad-game;port=3306', 'root', '');
$sql = 'INSERT INTO feedback(user, mail, feedback) VALUES(?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$name, $email, $feedback]);
header('Location: /');

// $sql = 'SELECT user FROM feedback WHERE'