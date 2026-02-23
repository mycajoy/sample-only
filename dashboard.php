<?php
session_start();
include "config.php";

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
<h2>Admin Dashboard</h2>
<a href="logout.php">Logout</a>
<hr>

<?php
$query = "SELECT * FROM tickets ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
?>

<div class="ticket">
<strong>Name:</strong> <?php echo $row['name']; ?><br>
<strong>Email:</strong> <?php echo $row['email']; ?><br>
<strong>Title:</strong> <?php echo $row['title']; ?><br>
<strong>Description:</strong> <?php echo $row['description']; ?><br>
<strong>Status:</strong> <?php echo $row['status']; ?><br><br>

<form action="update_status.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <select name="status">
        <option>Open</option>
        <option>In Progress</option>
        <option>Resolved</option>
    </select>
    <button type="submit">Update</button>
</form>

</div>

<?php } ?>
</div>