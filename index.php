<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Submit IT Support Ticket</h2>

<form action="process_ticket.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <input type="text" name="title" placeholder="Issue Title" required>
    <textarea name="description" placeholder="Describe your issue..." required></textarea>
    <button type="submit">Submit Ticket</button>
</form>

<br>
<a href="login.php">Admin Login</a>

</div>
</body>
</html>