<?php
include 'config.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="dashboard">
        <h2>Dashboard</h2>
        <a href="add_expense.php">Add Expense</a> |
        <a href="manage_expense.php">Manage Expenses</a> |
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
