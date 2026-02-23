<?php
include "config.php";

$id = $_POST['id'];
$status = $_POST['status'];

$query = "UPDATE tickets SET status='$status' WHERE id=$id";
mysqli_query($conn, $query);

header("Location: dashboard.php");
exit();
?>