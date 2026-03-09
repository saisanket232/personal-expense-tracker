<?php
include 'config.php';
$uid = $_SESSION['user_id'];

$result = mysqli_query($conn, "SELECT * FROM expenses WHERE user_id='$uid'");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Expenses</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Your Expenses</h2>

    <table border="1">
    <tr>
        <th>Title</th>
        <th>Amount</th>
        <th>Category</th>
        <th>Date</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['amount']; ?></td>
        <td><?php echo $row['category']; ?></td>
        <td><?php echo $row['expense_date']; ?></td>
    </tr>
    <?php } ?>
    </table>

    <p><a href="dashboard.php">Back to Dashboard</a></p>
</body>
</html>
