<?php
include 'config.php';

if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $amount = $_POST['amount'];
    $category = $_POST['category'];
    $date = $_POST['date'];
    $uid = $_SESSION['user_id'];

    $query = "INSERT INTO expenses \n              (user_id, title, amount, category, expense_date)\n              VALUES ('$uid', '$title', '$amount', '$category', '$date')";

    mysqli_query($conn, $query);
    header("Location: manage_expense.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Expense</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form method="post">
        <h2>Add Expense</h2>
        <input type="text" name="title" placeholder="Expense Title" required><br>
        <input type="number" name="amount" placeholder="Amount" required><br>
        <input type="text" name="category" placeholder="Category" required><br>
        <input type="date" name="date" required><br>
        <button name="add">Add</button>
        <p><a href="dashboard.php">Back to Dashboard</a></p>
    </form>
</body>
</html>
