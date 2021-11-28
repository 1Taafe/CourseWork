<?php

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comm'];

if(strlen($name) < 1 || strlen($email) < 1 || strlen($comment) < 1){
    header('location: ../../error.html');
    exit();
}

$conn = new mysqli("localhost", "root", "", "comments");
    if($conn->connect_error){
        header('location: ../../error.html');
        exit();
    }


$sql = "INSERT INTO comms (Имя, Email, Отзыв)
        VALUES('$name', '$email', '$comment')";

$conn->query($sql);

$conn->close();
header('location: ../../about.php');

?>