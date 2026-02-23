<?php
include "config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$title = $_POST['title'];
$description = $_POST['description'];

$query = "INSERT INTO tickets (name, email, title, description)
VALUES ('$name', '$email', '$title', '$description')";

mysqli_query($conn, $query);

header("Location: index.php");
exit();
?>
